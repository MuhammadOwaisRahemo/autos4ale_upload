/*
Author       : Dreamguys
Template Name: Doccure - Bootstrap Admin Template
Version      : 1.0
*/

(function($) {
    "use strict";

    // Variables declarations

    var $wrapper = $('.main-wrapper');
    var $pageWrapper = $('.page-wrapper');
    var $slimScrolls = $('.slimscroll');

    // Sidebar

    var Sidemenu = function() {
        this.$menuItem = $('#sidebar-menu a');
    };

    function init() {
        var $this = Sidemenu;
        $('#sidebar-menu a').on('click', function(e) {
            if ($(this).parent().hasClass('submenu')) {
                e.preventDefault();
            }
            if (!$(this).hasClass('subdrop')) {
                $('ul', $(this).parents('ul:first')).slideUp(350);
                $('a', $(this).parents('ul:first')).removeClass('subdrop');
                $(this).next('ul').slideDown(350);
                $(this).addClass('subdrop');
            } else if ($(this).hasClass('subdrop')) {
                $(this).removeClass('subdrop');
                $(this).next('ul').slideUp(350);
            }
        });
        $('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
    }

    // Sidebar Initiate
    init();

    // Mobile menu sidebar overlay

    $('body').append('<div class="sidebar-overlay"></div>');
    $(document).on('click', '#mobile_btn', function() {
        $wrapper.toggleClass('slide-nav');
        $('.sidebar-overlay').toggleClass('opened');
        $('html').addClass('menu-opened');
        return false;
    });

    // Sidebar overlay

    $(".sidebar-overlay").on("click", function() {
        $wrapper.removeClass('slide-nav');
        $(".sidebar-overlay").removeClass("opened");
        $('html').removeClass('menu-opened');
    });

    // Page Content Height

    if ($('.page-wrapper').length > 0) {
        var height = $(window).height();
        $(".page-wrapper").css("min-height", height);
    }

    // Page Content Height Resize

    $(window).resize(function() {
        if ($('.page-wrapper').length > 0) {
            var height = $(window).height();
            $(".page-wrapper").css("min-height", height);
        }
    });

    // Select 2

    // if ($('.select').length > 0) {
        // $('.select').select2({
        //     minimumResultsForSearch: -1,
        //     width: '100%'
        // });
    // }

    // Datetimepicker

    if ($('.datetimepicker').length > 0) {
        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY',
            icons: {
                up: "fa fa-angle-up",
                down: "fa fa-angle-down",
                next: 'fa fa-angle-right',
                previous: 'fa fa-angle-left'
            }
        });
        $('.datetimepicker').on('dp.show', function() {
            $(this).closest('.table-responsive').removeClass('table-responsive').addClass('temp');
        }).on('dp.hide', function() {
            $(this).closest('.temp').addClass('table-responsive').removeClass('temp')
        });
    }

    // Tooltip

    if ($('[data-toggle="tooltip"]').length > 0) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // Datatable

    // if ($('.datatable').length > 0) {
    //     $('.datatable').DataTable({
    //         "bFilter": false,
    //     });
    // }

    // Email Inbox

    if ($('.clickable-row').length > 0) {
        $(document).on('click', '.clickable-row', function() {
            window.location = $(this).data("href");
        });
    }

    // Check all email

    $(document).on('click', '#check_all', function() {
        $('.checkmail').click();
        return false;
    });
    if ($('.checkmail').length > 0) {
        $('.checkmail').each(function() {
            $(this).on('click', function() {
                if ($(this).closest('tr').hasClass('checked')) {
                    $(this).closest('tr').removeClass('checked');
                } else {
                    $(this).closest('tr').addClass('checked');
                }
            });
        });
    }

    // Mail important

    $(document).on('click', '.mail-important', function() {
        $(this).find('i.fa').toggleClass('fa-star').toggleClass('fa-star-o');
    });

    // Summernote

    if ($('.summernote').length > 0) {
        $('.summernote').summernote({
            height: 200, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });
    }

    // Product thumb images

    if ($('.proimage-thumb li a').length > 0) {
        var full_image = $(this).attr("href");
        $(".proimage-thumb li a").click(function() {
            full_image = $(this).attr("href");
            $(".pro-image img").attr("src", full_image);
            $(".pro-image img").parent().attr("href", full_image);
            return false;
        });
    }

    // Lightgallery

    if ($('#pro_popup').length > 0) {
        $('#pro_popup').lightGallery({
            thumbnail: true,
            selector: 'a'
        });
    }

    // Sidebar Slimscroll

    if ($slimScrolls.length > 0) {
        $slimScrolls.slimScroll({
            height: 'auto',
            width: '100%',
            position: 'right',
            size: '7px',
            color: '#ccc',
            allowPageScroll: false,
            wheelStep: 10,
            touchScrollStep: 100
        });
        var wHeight = $(window).height() - 60;
        $slimScrolls.height(wHeight);
        $('.sidebar .slimScrollDiv').height(wHeight);
        $(window).resize(function() {
            var rHeight = $(window).height() - 60;
            $slimScrolls.height(rHeight);
            $('.sidebar .slimScrollDiv').height(rHeight);
        });
    }

    // Small Sidebar

    $(document).on('click', '#toggle_btn', function() {
        if ($('body').hasClass('mini-sidebar')) {
            $('body').removeClass('mini-sidebar');
            $('.subdrop + ul').slideDown();
        } else {
            $('body').addClass('mini-sidebar');
            $('.subdrop + ul').slideUp();
        }
        setTimeout(function() {
            mA.redraw();
            mL.redraw();
        }, 300);
        return false;
    });
    $(document).on('mouseover', function(e) {
        e.stopPropagation();
        if ($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
            var targ = $(e.target).closest('.sidebar').length;
            if (targ) {
                $('body').addClass('expand-menu');
                $('.subdrop + ul').slideDown();
            } else {
                $('body').removeClass('expand-menu');
                $('.subdrop + ul').slideUp();
            }
            return false;
        }
    });


    $('.psl').click(function(e) {
        e.preventDefault();
        $('#packages_servicesModal').modal('show');
    })
    $('.pkg-fee').click(function(e) {
        e.preventDefault();
        $('#packages_servicesModal').modal('show');
        $('#packages_servicesModal').find('.tab-pane,.nav-link').removeClass('active');
        $('#pills-home-tab,#pills-home').addClass('active');
        $('#pills-home').addClass('show')
    })
    $('.serv-fee').click(function(e) {
        e.preventDefault();
        $('#packages_servicesModal').modal('show');
        $('#packages_servicesModal').find('.tab-pane,.nav-link').removeClass('active');
        $('#pills-profile-tab,#pills-profile').addClass('active');
        $('#pills-profile').addClass('show')
    })

    $('.packages-inpt-edit').click(function() {
        $('#packagesModalEdit').modal('show');
    })
    $('.services-inpt-edit').click(function() {
        $('#servicesModalEdit').modal('show');
    })


    // $(document).on('click','.fc-list-event',function(){
    // 	location.href = 'edit-appointment.html';
    // })
    $(document).click(function() {
        $('.fc-header-toolbar .fc-toolbar-chunk:last-child .fc-button-group').slideUp();
    });
    $(document).on('click', '.fc-header-toolbar .fc-toolbar-chunk:last-child .fc-button-group', function(e) {
        e.stopPropagation();
    })
    $('.c-list').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('.fc-header-toolbar .fc-toolbar-chunk:last-child .fc-button-group').slideToggle()
    })
    $(document).on('click', '.fc-header-toolbar .fc-button-active', function() {
        $('.c-list').children('.c-list-in').text($(this).text());
        $('.fc-header-toolbar .fc-toolbar-chunk:last-child .fc-button-group').slideUp();
    });
    $('.app-cont').click(function() {
        $(this).children('i').toggleClass('raised-disabled');
    })

    $('.appointment-icon').click(function() {
        $(this).children('img').toggleClass('hide');
    })
    $('.flag-ul li').click(function() {
        $('.flag-ul li').removeClass('active');
        $(this).addClass('active');
    })

    // $('.add-serv').click(function(e){
    // e.preventDefault();
    // $('.serv-body').append('<tr><td><select class="custom-select select2 select2-danger select_2 service_select" data-dropdown-css-class="select2-danger" style="width: 100%"><option selected value="empty">Select Service</option></select> </td><td>--</td><td>--</td><td class="ser_disc"><input type="text" name="" class="form-control" placeholder="Discount Value"></td><td class="ser_total">$100</td><td><i class="fa fa-trash-alt trash_i"></i></td></tr>');
    // jQuery.loadScript = function (url, callback) {
    //       jQuery.ajax({
    //               url: url,
    //               dataType: 'script',
    //               success: callback,
    //               async: true
    //           });

    //       }
    //       if (typeof someObject == 'undefined'){ 
    //           $.loadScript('assets/plugins/select2/js/select2.full.min.js', function(){
    //               $(function(){
    //                   // Initialize Select2 Elements
    //                   $('.select2').select2()

    //                   // Initialize Select2 Elements
    //                   $('.select2bs4').select2({
    //                     theme: 'bootstrap4'
    //                   })
    //                 })
    //           });
    //       }	
    // }) 
    $('.pkg-add').click(function(e) {
        e.preventDefault();
        $('.pkg-body').append('<tr><td><select class="custom-select select2 select2-danger select_2 pkg_select" data-dropdown-css-class="select2-danger" style="width: 100%"><option selected value="empty">Select Packges</option></select></td><td>36min</td><td><i class="fa fa-eye pkg-i"></i></td><td>$100</td><td class="pkg_disc"><input type="text" name="" class="form-control" placeholder="Discount Value"></td><td class="pkg_total">$200</td><td><i class="fa fa-trash-alt trash_i"></i></td></tr>')
    })
    $(document).on('click', '.trash_i', function() {
        $(this).closest('tr').fadeOut();
    })
    $(document).on('click', '.pkg-i', function() {
            $('#servicesModal').modal('show');
        })
        // $('#customerinpt').keyup(function(){
        // 	var $this = $(this).val();

    // 	var filter = $this.toUpperCase();
    // 	$('#customer').children('option').each(function(){
    // 		if ($(this).val().toUpperCase().indexOf(filter) > -1) {
    // 			$('.add-cus').attr('disabled','disabled');				
    // 		}else{
    // 			$('.add-cus').removeAttr('disabled','disabled');				
    // 		}

    // 	})
    // })
    
    var ser_array = [{
            id: 1,
            name: 'Hair Cutting',
            duration: '26min',
            price: 1000
        },
        {
            id: 2,
            name: 'Shave',
            duration: '36min',
            price: 500
        },
        {
            id: 3,
            name: 'Bread',
            duration: '20min',
            price: 200
        },
        {
            id: 4,
            name: 'Bleach',
            duration: '35min',
            price: 500
        },
        {
            id: 5,
            name: 'Blowdary Shorts',
            duration: '40min',
            price: 200
        }
    ];
    for (var i = 0; i < ser_array.length; i++) {
        $('.service_select').append('<option value="' + i + '" id="serv-option-' + i + '">' + ser_array[i].name + '</option>');
    }
    $('.service_select').change(function() {

        var ser_val = $(this).val();
        if (ser_val != "empty") {
            $('.ser_duration').text(ser_array[ser_val].duration);
            $('.ser_price').text(ser_array[ser_val].price);
            $('.ser_trash').attr('data-serId', ser_array[ser_val].id);
            $('.serv-body').append('<tr><td><select class="custom-select select2 select2-danger select_2 service_select" data-dropdown-css-class="select2-danger" style="width: 100%"><option selected value="empty">Select Service</option></select> </td><td>--</td><td>--</td><td class="ser_disc"><input type="text" name="" class="form-control" placeholder="Discount Value"></td><td class="ser_total">$100</td><td><i class="fa fa-trash-alt trash_i"></i></td></tr>');
            // $('#serv-option-0').css('display','none');
        } else {
            $('.ser_duration,.ser_price').text('--');
        }
    })

    var pkg_array = [{
            id: 1,
            name: 'Hair Cutting & Shave',
            services: ['Hair Cutting', 'Shave'],
            duration: '50min',
            price: 1500
        },
        {
            id: 2,
            name: 'Bread & Bleach',
            services: ['Bread', 'Bleach'],
            duration: '55min',
            price: 500
        },
        {
            id: 3,
            name: 'Blowdary Shorts & Wash',
            services: ['Blowdary Shorts', 'Wash'],
            duration: '60min',
            price: 400
        },
        {
            id: 4,
            name: 'Girls Cutting & cleansing',
            services: ['Girls Cutting', 'cleansing'],
            duration: '75min',
            price: 1000
        },

    ];
    for (var i = 0; i < pkg_array.length; i++) {
        $('.pkg_select').append('<option value="' + i + '">' + pkg_array[i].name + '</option>');
    }
    $('.pkg_select').change(function() {
        var pkg_val = $(this).val();
        if (pkg_val != "empty") {
            $('.pkg_duration').text(pkg_array[pkg_val].duration);
            $('.pkg_price').text(pkg_array[pkg_val].price);
            $('.pkg_trash').attr('data-pkgId', pkg_array[pkg_val].id);
            $('.pkg-i').attr('data-pkgViewId', pkg_array[pkg_val].id);
        } else {
            $('.pkg_price,#pkg_duration').text('--')
        }
    })
    $('.m_select').find('.filter-option-inner-inner').text('Select Staff')
        /* event edit modal */

    $('#QuickEditTimeIcon').click(function() {
        $(this).toggleClass('fa-save');
        if ($(this).data('val') == 0) {
            $('#QuickEditTime').removeAttr('readonly')
            $('#QuickEditTime').focus();
            $('#QuickEditTime').css({ 'border': '1px solid #ccc' });
            $(this).data('val', 1)
        } else {
            $('#QuickEditTime').attr('readonly', 'readonly')
            $('#QuickEditTime').css({ 'border': '1px solid transparent' });

            $(this).data('val', 0)
        }
    })

    $('#QuickEditStaffIcon').click(function() {
        $(this).toggleClass('fa-save');
        if ($(this).data('val') == 0) {
            $('#QuickEditStaff').removeAttr('readonly')
            $('#QuickEditStaff').focus();
            $('#QuickEditStaff').css({ 'border': '1px solid #ccc' });
            $(this).data('val', 1)
        } else {
            $('#QuickEditStaff').attr('readonly', 'readonly')
            $('#QuickEditStaff').css({ 'border': '1px solid transparent' });

            $(this).data('val', 0)
        }
    })

  

    $('.payment-mode').change(function() {
        var pay_val = $(this).val();
        if (pay_val == 2) {
            $('.efpos').css('display', 'block')
        } else {
            $('.efpos').css('display', 'none')
        }
    })

})(jQuery);
