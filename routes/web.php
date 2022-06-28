<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//auth routes for normal user
Auth::routes(['verify' => true, 'register' => true]);

Route::get('auth/google', [SocialController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [SocialController::class, 'handleGoogleCallback'])->name('google.callback');


Route::get('auth/facebook', [SocialController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'handleFacebookCallback'])->name('facebook.callback');
Route::namespace('Auth')->group(function () {
    Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');

    Route::POST('/register/save', 'RegisterController@create')->name('register.save');
    Route::POST('/register/add-user', 'RegisterController@saveUser')->name('register.saveUser');
    Route::get('/register/create-password/{id}', 'RegisterController@createPassword')->name('register.createPassword');
    Route::post('/register/set-password', 'RegisterController@setUserPassword')->name('register.setUserPassword');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('front.register');
    Route::POST('/login', 'LoginController@login')->name('front.login');
    Route::get('/logout', 'LoginController@logout')->name('front.logout');
});



Route::namespace('Frontend')->as('front.')->group(function () {

    // cars routes
    Route::get('/', 'CarController@index')->name('main');
    Route::get('/home', 'CarController@index')->name('home');
    Route::prefix('cars')->as('cars.')->group(function () {
        Route::get('/get-models', 'CarController@get_models')->name('get_models');
        Route::get('/used', 'CarController@used_cars')->name('used_cars');
        Route::get('/new', 'CarController@new_cars')->name('new_cars');
        Route::get('/sell-my-car', 'CarController@sell_my_car')->name('sell_my_car');
        Route::get('/electric', 'CarController@electric_cars')->name('electric_cars');
        Route::get('/leasing', 'CarController@leasing_cars')->name('leasing_cars');
        Route::get('/blogs', 'CarController@car_blogs')->name('car_blogs');
        Route::get('/blog/{id}', 'CarController@single_car_blog')->name('single_car_blog');
        Route::get('/buy-new-car', 'CarController@buy_new_car')->name('buy_new_car');
        Route::get('/details/{id}', 'CarController@car_details')->name('single_car_details');
        Route::get('/value', 'CarController@car_value')->name('car_value');
    });

    // luxry car routes
    Route::get('/luxry', 'HomeController@luxury')->name('luxury');

    // vans routes
    Route::prefix('vans')->as('vans.')->group(function () {
        Route::get('/', 'VanController@vans')->name('vans');
        Route::get('/new-vans', 'VanController@new_vans')->name('new_vans');
        Route::get('/sell-your-van', 'VanController@sell_van')->name('sell_van');
        Route::get('/blogs', 'VanController@van_blogs')->name('van_blogs');
        Route::get('/reviews', 'VanController@van_reviews')->name('van_reviews');
        Route::get('/finance', 'VanController@van_finance')->name('van_finance');
        Route::get('/electric-van', 'VanController@electric_van')->name('electric_van');
    });

    // bikes routes
    Route::prefix('bikes')->as('bikes.')->group(function () {
        Route::get('/', 'BikeController@index')->name('bikes');
        Route::get('/new', 'BikeController@new_bikes')->name('new_bikes');
        Route::get('/sell-your-bike', 'BikeController@sell_bike')->name('sell_bike');
        Route::get('/reviews', 'BikeController@bike_reviews')->name('bike_reviews');
        Route::get('/finance', 'BikeController@bike_finance')->name('bike_finance');
        Route::get('/electric-bikes', 'BikeController@electric_bikes')->name('electric_bikes');
    });

    // motorhomes routes
    Route::prefix('motorhomes')->as('motorhomes.')->group(function () {
        Route::get('/', 'MotorHomeController@index')->name('motorhomes');
        Route::get('/used', 'MotorHomeController@motorhomes_used')->name('motorhomes_used');
        Route::get('/new', 'MotorHomeController@motorhomes_new')->name('motorhomes_new');
        Route::get('/sell-your-motorhome', 'MotorHomeController@motorhomes_sell')->name('motorhomes_sell');
        Route::get('/reviews', 'MotorHomeController@motorhomes_reviews')->name('motorhomes_reviews');
        Route::get('/finance', 'MotorHomeController@motorhomes_finance')->name('motorhomes_finance');
    });

    // caravans routes
    Route::prefix('caravans')->as('caravans.')->group(function () {
        Route::get('/', 'CaravanController@index')->name('caravans');
        Route::get('/used', 'CaravanController@caravans_used')->name('caravans_used');
        Route::get('/new', 'CaravanController@caravans_new')->name('caravans_new');
        Route::get('/sell-your-caravans', 'CaravanController@caravans_sell')->name('caravans_sell');
        Route::get('/reviews', 'CaravanController@caravans_reviews')->name('caravans_reviews');
        Route::get('/finance', 'CaravanController@caravans_finance')->name('caravans_finance');
    });

    // trucks routes
    Route::prefix('trucks')->as('trucks.')->group(function () {
        Route::get('/', 'TruckController@index')->name('trucks');
        Route::get('/used', 'TruckController@trucks_used')->name('trucks_used');
        Route::get('/new', 'TruckController@trucks_new')->name('trucks_new');
        Route::get('/sell-your-trucks', 'TruckController@trucks_sell')->name('trucks_sell');
        Route::get('/reviews', 'TruckController@trucks_reviews')->name('trucks_reviews');
    });

    // Filters Routes
    Route::get('/search-filter','FilterController@search_filter')->name('search_filter');
    Route::get('/search-filter-data','FilterController@search_filter_data')->name('search_filter_data');

    // ads dealer routes
    Route::get('/dealers','FilterController@ads_dealer_data')->name('ads_dealer_data');

    // sign in view
    Route::get('/signin', function () {
        return view('front.pages.login_register.signin');
    })->name('signin');
    Route::view('/signup', 'front.pages.login_register.signup')->name('signup');

    // check login for find car
    Route::get('/check-login', 'HomeController@check_login')->name('check_login');
});

Route::middleware(['userAuth', 'is_active', 'verified'])->as('front.')->namespace('Frontend')->group(function () {

    // dashboard routes
    Route::get('/my-vehicle', 'DashboardController@index')->name('my_vehicle');
    Route::get('/subscription', 'DashboardController@subscription')->name('subscription');
    Route::get('/payment-history', 'DashboardController@payment_history')->name('payment_history');
    Route::get('/payment-method', 'DashboardController@payment_method')->name('payment_method');

    // vehicle selling routes
    Route::prefix('vehicle-sale')->group(function () {
        Route::get('/selling-summary', 'CarAdController@vehicle_sale_summary')->name('vehacle_sale_summary');
        Route::get('/find-car', 'CarAdController@find_car')->name('find_car');
        Route::get('/find-car-details', 'CarAdController@find_car_details')->name('find_car_details');
        Route::post('/save-car-details', 'CarAdController@save_car_ad')->name('save_car_ad');
        Route::get('/price/{id}', 'CarAdController@vehicle_ad_price')->name('vehicle_ad_price');
        Route::post('/save-price', 'CarAdController@vehicle_save_price')->name('vehicle_save_price');
        Route::get('/car-ad-details/{id}', 'CarAdController@car_ad_details')->name('car_ad_details');
        Route::post('/save-car-ad-details/', 'CarAdController@save_car_details')->name('save_car_details');
        Route::get('/car-ad-images/{id}', 'CarAdController@car_images')->name('car_images');
        Route::post('/save-car-ad-images', 'CarAdController@save_car_images')->name('save_car_images');
        Route::get('/car-contact-details/{id}', 'CarAdController@car_contact_details')->name('car_contact_details');
        Route::post('/save-car-contact-details', 'CarAdController@save_car_contact_details')->name('save_car_contact_details');
        Route::get('/car-ad-package/{id}', 'CarAdController@car_ad_package')->name('car_ad_package');
        Route::post('/save-car-ad-package', 'CarAdController@save_car_ad_package')->name('save_car_ad_package');
        Route::get('/car-payment-summary', 'CarAdController@car_payment_summary')->name('car_payment_summary');
        Route::post('/save-car-payment-summary', 'CarAdController@save_car_payment_summary')->name('save_car_payment_summary');
        Route::get('/car-payment-success/{id}', 'CarAdController@car_payment_success')->name('car_payment_success');
        Route::get('/get-car-sub-category', 'CarAdController@get_car_subCat')->name('get_car_subCat');
    });

    // enquiry route
    Route::post('/save-enquiry','CarAdController@save_enquiry')->name('save_enquiry');

    // personal details
    Route::get('/personal-details', 'DashboardController@personal_details')->name('personal_details');
    Route::get('/personal-details/edit-personal-details', 'DashboardController@edit_personal_details')->name('edit_personal_details');
    Route::post('/personal-details/save-personal-details', 'DashboardController@save_personal_details')->name('save_personal_details');
    Route::get('/personal-details/edit-trade-seller-details', 'DashboardController@edit_trade_seller')->name('edit_trade_seller');
    Route::post('/personal-details/save-trade-seller-details', 'DashboardController@save_trade_details')->name('save_trade_details');
    Route::get('/personal-details/reset-password', 'DashboardController@reset_password')->name('reset_password');
    Route::get('/personal-details/save-password', 'DashboardController@save_password')->name('save_password');



    // user chat and creaate room routes
    Route::prefix('chat')->as('chat.')->group(function(){
        Route::get('/room-check/{receiver_id}','ChatController@room_create')->name('room-check');
        Route::get('/room','ChatController@chat_room')->name('room');
        Route::post('/msg-save','ChatController@save_msg')->name('save-msg');
    });

    // user profile routes
    // Route::get('/user-profile', 'HomeController@user_profile')->name('user_profile');
    // Route::post('/user-profile/update', 'HomeController@save_profile')->name('user_profile.save_profile');
    // Route::post('/user-profile/update-password', 'HomeController@change_password')->name('user_profile.change_password');
    // Route::post('/user-profile/password-confrim', 'HomeController@confrim_password')->name('user_profile.confrim_password');
});



//admin auth routes
Route::prefix('web_admin')->namespace('Auth')->group(function () {
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/logout', 'AdminLoginController@logout')->name('admin.logout');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
    Route::post('/password/reset', 'AdminResetPasswordController@reset')->name('admin.password.update');
    Route::post('/password/forget/password', 'AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

//protected admin routes
Route::middleware(['auth:admin', 'is_active'])->prefix('web_admin')->namespace('Administrator')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');

    //profile pages
    Route::get('/update-profile', 'StaffController@update_profile')->name('admin.update_profile');
    Route::post('/save-profile', 'StaffController@save_profile')->name('admin.save_profile');
    Route::post('/change-password', 'StaffController@change_password')->name('admin.change_password');

    //Staffs routes
    Route::get('/staff', 'StaffController@index')->name('admin.staff');
    Route::get('/staff/add', 'StaffController@add')->name('admin.staff.add');
    Route::get('/staff/edit/{user_id}', 'StaffController@edit')->name('admin.staff.edit');
    Route::post('/staff/save', 'StaffController@save')->name('admin.staff.save');
    Route::post('/staff/update_password', 'StaffController@update_password')->name('admin.staff.update_password');
    Route::get('/staff/update-status/{user_id}', 'StaffController@updateStatus')->name('admin.staff.update_status');
    Route::get('/staff/delete/{user_id}', 'StaffController@delete')->name('admin.staff.delete');

    //notification routes
    // Route::get('/notification', 'NotificaitonController@index')->name('admin.notifications');
    // Route::get('/notification/get_all_notifications', 'NotificaitonController@get_all_notificaitons')->name('admin.notification.all');
    // Route::get('/notification/mark_all_read', 'NotificaitonController@mark_all_read')->name('admin.notifications.all_read');
    // Route::get('/notification/mark_as_read/{id}', 'NotificaitonController@mark_single_notification_read')->name('admin.notifications.mark_as_read');
    // Route::get('/notification/delete_all', 'NotificaitonController@delete_notifications')->name('admin.notifications.delete_all');


    //Permission type routes
    Route::get('/permission-type', 'PermissionController@permissionn_type_all')->name('admin.permissionn-type');
    Route::post('/permissionn-type/save', 'PermissionController@permissionn_type_save')->name('admin.permissionn-type.save');
    Route::get('/permissionn-type/delete/{permission_id?}', 'PermissionController@permissionn_type_delete')->name('admin.permissionn-type.delete');

    // Permissions routes
    Route::get('/permissions', 'PermissionController@index')->name('admin.permissions');
    Route::post('/permissions/save', 'PermissionController@save')->name('admin.permissions.save');
    Route::get('/permissions/delete/{permission_id?}', 'PermissionController@delete')->name('admin.permissions.delete');

    // Roles
    Route::get('/role', 'RoleController@index')->name('admin.roles');
    Route::get('/role/add', 'RoleController@add')->name('admin.role.add');
    Route::post('/role/save', 'RoleController@save')->name('admin.roles.save');
    Route::get('/role/edit/{id}', 'RoleController@edit')->name('admin.role.edit');
    Route::get('/role/delete/{id}', 'RoleController@delete')->name('admin.role.delete');

    // Users Routes
    Route::get('/users', 'UserController@index')->name('admin.users');
    Route::get('/users/seller-details/{id}', 'UserController@seller_details')->name('admin.seller_details');

    // Blogs Routes For Admin
    Route::get('/blogs', 'BlogController@index')->name('admin.blogs');
    Route::get('/blog/add', 'BlogController@add')->name('admin.blog.add');
    Route::post('/blog/save', 'BlogController@save')->name('admin.blog.save');
    Route::get('/blog/edit/{id}', 'BlogController@edit')->name('admin.blog.edit');
    Route::get('/blog/delete/{id}', 'BlogController@delete')->name('admin.blog.delete');
});


Route::prefix('artisan/command')->name('artisan.command.')->group(function () {
    Route::get('/config_cache', 'ArtisanCommandController@config_cache')->name('config_cache');
    Route::get('/route_cache', 'ArtisanCommandController@route_cache')->name('route_cache');
    Route::get('/cache_clear', 'ArtisanCommandController@cache_clear')->name('cache_clear');
    Route::get('/route_list', 'ArtisanCommandController@route_list')->name('route_list');
    Route::get('/migrate', 'ArtisanCommandController@migrate')->name('migrate');
});
