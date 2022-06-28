@extends('layouts.front_dashboard')
@section('page-css')
<link rel="stylesheet" type="text/css" href="{{ asset('front_assets') }}/css/chat.css">
<style>
    .active_chat {
        background-color: lightskyblue !important;
    }

    .loading {
        display: none;
    }

    .loading.active {
        display: block;
        font-size: 1em;
        text-align: center;
        margin: 10px 0;
    }
</style>
@endsection
@section('content')

<h3 class=" text-center">Messaging</h3>

<div class="messaging">
    <div class="inbox_msg">
        <div class="inbox_people">
            <div class="headind_srch">
                <div class="recent_heading">
                    <h4>Recent</h4>
                </div>
                <div class="srch_bar">
                    <div class="stylish-input-group">
                        <input type="text" class="search-bar" placeholder="Search">
                        <span class="input-group-addon">
                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="inbox_chat">
                @foreach ($chat_romm_users as $room_user)
                @if ($room_user->sender_id != $user_id && $room_user->receiver_id == $user_id)
                <div class="chat_list dropdown-item" style="cursor: pointer" data-roomid="{{$room_user->id}}" data-receiverid="{{$room_user->receiver_id}}" id="roomDiv{{$room_user->id}}">
                    <div class="chat_people">
                        <div class="chat_img"> <img src="{{check_file($room_user->sender->trade_logo,'user')}}" alt="sunil"> </div>
                        <div class="chat_ib">
                            <h5>{{ $room_user->sender->display_name }} </h5>
                            <!-- <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p> -->
                        </div>
                    </div>
                </div>
                @endif
                @if ($room_user->sender_id == $user_id && $room_user->receiver_id != $user_id)
                <div class="chat_list dropdown-item" style="cursor: pointer" data-roomid="{{$room_user->id}}" data-receiverid="{{$room_user->receiver_id}}" id="roomDiv{{$room_user->id}}">
                    <div class="chat_people">
                        <div class="chat_img"> <img src="{{check_file($room_user->receiver->trade_logo,'user')}}" alt="sunil"> </div>
                        <div class="chat_ib">
                            <h5>{{ $room_user->receiver->display_name }} </h5>
                            <!-- <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p> -->
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

            </div>
        </div>
        <div class="mesgs">
            <div class="msg_history">
                <!-- <div class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="received_msg">
                        <div class="received_withd_msg">
                            <p>Test which is a new approach to have all
                                solutions</p>
                            <span class="time_date"> 11:01 AM | June 9</span>
                        </div>
                    </div>
                </div>
                <div class="outgoing_msg">
                    <div class="sent_msg">
                        <p>Test which is a new approach to have all
                            solutions</p>
                        <span class="time_date"> 11:01 AM | June 9</span>
                    </div>
                </div> -->
            </div>
            <!-- <div class="loading">
                Loading Chat
            </div> -->
            <div class="type_msg" style="display: none;">
                <form action="" method="post" id="save-msg">
                    @csrf
                    <input type="hidden" name="room_id" id="room_id" value="">
                    <input type="hidden" name="receiver_id" id="receiver_id" value="">
                    <input type="hidden" name="sender_id" id="sender_id" value="{{auth()->user()->id}}">
                    <div class="input_msg_write">
                        <input type="text" class="write_msg" name="msg" id="write_msg" placeholder="Type a message" />
                        <button class="msg_send_btn" type="submit">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-script')
<script src="{{asset('front_assets')}}/moment/js/moment.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
<script>
    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyC00TpVerHMgUQkPj-MEUPTZ_W5Ej5OkVE",
        authDomain: "auto4sales-19e1d.firebaseapp.com",
        projectId: "auto4sales-19e1d",
        storageBucket: "auto4sales-19e1d.appspot.com",
        messagingSenderId: "587643153785",
        appId: "1:587643153785:web:f711c90a7aff56dd1853a8"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    const db = firebase.firestore();

    var pageSize = 3;
    var room_id = '{{!empty($room_id) ? $room_id : "" }}';
    let lastestChat = null;
    var receiver_id = '';
    var my_id = "{{auth('user')->id()}}";
    var my_name = "{{auth('user')->user()->display_name}}";

    function saveMessage(room_id, user_id, name, messageText) {
        if (messageText.trim()) {
            const message = {
                room_id: room_id,
                user_id: user_id,
                message: messageText,
                name: name,
                time: moment().format("h:mm A"),
                created_at: moment().format('MMMM Do YYYY, h:mm:ss A'),
            }
            return new Promise((resolve, reject) => {
                db.collection('messages')
                    .add(message)
                    .then(function(docRef) {
                        resolve(message)
                    })
                    .catch(function(error) {
                        reject(error)
                    })
            })
        }
    }

    function renderMesg(doc) {
        var html = "";
        if (my_id == doc.user_id) {
            html += '<div class="outgoing_msg">\n\
                    <div class="sent_msg">\n\
                        <p>You</p>\n\
                        <p>' + doc.message + '</p>\n\
                        <span class="time_date">' + doc.created_at + '</span>\n\
                    </div>\n\
                </div>';
        } else {
            html += '<div class="incoming_msg">\n\
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>\n\
                    <div class="received_msg">\n\
                        <div class="received_withd_msg">\n\
                            <p>' + doc.name + '</p>\n\
                            <p>' + doc.message + '</p>\n\
                            <span class="time_date">' + doc.created_at + '</span>\n\
                        </div>\n\
                    </div>\n\
                </div>';
        }
        $('.msg_history').append(html);
    }

    $(document).ready(function () {
        if (room_id.length != 0) {
            $('.msg_history').empty();
            $('#roomDiv'+room_id).trigger('click');
        }
    });

    $('#save-msg').submit(function(e) {
        e.preventDefault();
        var msg = $("#write_msg").val();
        var formdata = $(this).serialize();
        $('.msg_send_btn').prop('disabled', true)
        $.ajax({
            type: "post",
            url: "{{route('front.chat.save-msg')}}",
            data: formdata,
            dataType: "json",
            success: function(res) {
                if (res.status === 200) {
                    saveMessage(room_id, my_id, my_name, msg);
                }

                $('#write_msg').val('');
                $('.msg_send_btn').prop('disabled', false);
            }
        });
    });

    $('.chat_list').click(function(e) {
        room_id = $(this).data('roomid');
        receiver_id = $(this).data('receiverid');
        $('#room_id').val(room_id);
        $('#receiver_id').val(receiver_id);

        $('.chat_list').removeClass('active_chat');
        $(this).addClass('active_chat');
        $('.msg_history').empty();
        $('.type_msg').show();

        db.collection("messages").where("room_id", "==", room_id).onSnapshot(snapshot => {
            let changes = snapshot.docChanges();
            changes.forEach(change => {
                if (change.type == 'added') {
                    renderMesg(change.doc.data())
                }
            })
        });
    })



    // const container = document.querySelector('.msg_history');
    // const loading = document.querySelector('.loading');



    // const getNextChat = async () => {

    //     loading.classList.add('active');

    //     const ref = db.collection('messages')
    //         .where('room_id', '==', room_id)
    //         .orderBy('created_at', 'desc')
    //         .startAfter(lastestChat || 0)
    //         .limit(4);

    //     const data = await ref.get();

    //     data.docs.forEach(doc => {
    //         console.log(doc.data());
    //         renderMesg(doc.data());
    //     });

    //     loading.classList.remove('active');



    //     // update latest chat msg
    //     lastestChat = data.docs[data.docs.lenght - 1]

    //     // unattach event listener if no more data
    //     if (data.empty) {
    //         container.removeEventListener('scroll', handleScroll);
    //     }
    // }


    // const handleScroll = () => {
    //     let triggerHeight = container.scrollTop + container.offsetHeight;

    //     if (triggerHeight >= container.scrollHeight) {
    //         // getNextChat();
    //     }
    // }

    // load more chat on scroll
    // container.addEventListener('scroll', handleScroll)

</script>
@endsection
