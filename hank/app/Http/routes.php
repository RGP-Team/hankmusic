<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//use Illuminate\Support\Facades\Mail;

//Route::get('/', 'IndexController@index');
Route::get('/', 'HomeController@index');
Route::post('/search-results','HomeController@searchResults');
Route::get('/home', 'IndexController@index');
Route::get('/faq', 'IndexController@faq');
Route::get('/blog', 'IndexController@blog');
Route::get('producerfeatureprofile/{id}', 'IndexController@featureProfile');
Route::get('producersonglist/{id}', 'IndexController@producerSongList');
Route::get('producerlistsong', 'IndexController@producerListSong');
Route::get('bpmsearch', 'IndexController@bpmSearch');
Route::get('/contactus', 'IndexController@contactUs');
Route::group(['middleware' =>'auth'], function(){
Route::get('recuring','IndexController@recuring');
Route::get('notification','IndexController@notifications');
Route::get('exportProducer', 'IndexController@exportProducer');
Route::get('exportArtist', 'IndexController@exportArtist');
Route::get('admin/exportproducersales', 'IndexController@exportProducerSales');
Route::post('user/sendemail', 'Adminauth\AuthController@sendEmail');
Route::get('user/faq', 'IndexController@faq');
Route::get('user/blog', 'IndexController@blog');
Route::get('user/contactus', 'IndexController@contactUs');
Route::get('dashboard', 'IndexController@useraccount');
Route::get('/useraccount', 'IndexController@useraccount');
Route::get('/audio-upload', 'IndexController@audio');
Route::get('/userpayment', 'IndexController@userpayment');
Route::get('/PageNotFound', 'IndexController@pageNotFound');
Route::get('/producerhome', 'IndexController@producerhome');
Route::get('/adminhome', 'IndexController@adminhome');
Route::get('/producer/uploadmusic', 'IndexController@uploadMusic');
Route::get('/admin/producer', 'IndexController@producerList');
Route::get('/admin/artist', 'IndexController@artistList');
Route::get('/producer/paymentmethods', 'IndexController@producerPaymentMethods');
Route::get('/producer/payout', 'IndexController@producerPayout');
Route::get('/admin/payout', 'IndexController@adminPayout');
//Route::get('/producer/messages', 'IndexController@producerMessages');
Route::get('/producer/sold', 'IndexController@producerSold');
Route::get('/admin/sold', 'IndexController@adminSold');
Route::get('/producer/banned', 'IndexController@producerBanned');
Route::get('/admin/banned', 'IndexController@adminBanned');
Route::get('/user/mylist', 'IndexController@userMylist');
Route::get('/user/wishlist', 'IndexController@userWishlist');
Route::get('/user/purchasedmusic', 'IndexController@userPurchasedMusic');
Route::get('/user/balance', 'IndexController@userBalance');
Route::get('/user/paymentmethods', 'IndexController@userPaymentMethods');
Route::get('/user/notification', 'IndexController@userNotification');
Route::get('/adminhome', 'IndexController@adminhome');
Route::get('/moderatorhome', 'IndexController@moderatorhome');
Route::post('updateinfo', 'Adminauth\AuthController@userUpdate');
Route::post('paymentinfo', 'Adminauth\AuthController@paymentUpdate');
Route::post('/upload', 'Adminauth\AuthController@uploadFile');
Route::post('uploadprofilepic', 'Adminauth\AuthController@uploadProfilePic');
Route::post('musicapproved', 'Adminauth\AuthController@musicApproved');
Route::post('admin/producerinfo', 'Adminauth\AuthController@producerInfo');
Route::post('admin/artistinfo', 'Adminauth\AuthController@artistInfo');
Route::post('admin/requestaccept', 'Adminauth\AuthController@requestAccept');
Route::post('producer/requestpayment', 'Adminauth\AuthController@requestPayment');
Route::post('admin/requestpayment', 'Adminauth\AuthController@requestPayment');
Route::post('tempadd', 'Adminauth\AuthController@tempAdd');
Route::get('updatecart', 'Adminauth\AuthController@updateCart');
Route::post('musicunapproved', 'Adminauth\AuthController@musicUnpproved');
Route::post('musicdelete', 'Adminauth\AuthController@musicDelete');
Route::post('orderDelete', 'Adminauth\AuthController@orderDelete');
Route::get('userLogout', 'Adminauth\AuthController@userLogout');
Route::get('/producer/settings', 'IndexController@producerSettings');
Route::get('/producer/paymenthistory', 'IndexController@producerPaymentHistory');
Route::get('/producer/cart', 'IndexController@producerCart');
Route::get('/homeafterlogin', 'IndexController@homeAfterLogin');
Route::post('producerAccountSettings', 'Adminauth\AuthController@producerAccountSettings');
Route::get('pendingApproval', 'IndexController@producerPendingApproval');
Route::get('/admin/pendingApproval', 'IndexController@adminPendingApproval');
Route::get('download/{id}', 'Adminauth\AuthController@getDownload');
Route::post('statusSeen', 'IndexController@statusSeen');
Route::get('featureprofile/{id}', 'IndexController@featureProfile');
Route::get('songlist/{id}', 'IndexController@producerSongList');
Route::get('listsong', 'IndexController@producerListSong');


/*Route::post('payment', 'Adminauth\PaypalController@postPayment');
// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', 'Adminauth\PaypalController@getPaymentStatus');
///producer*/
Route::post('payment', array(
    'as' => 'payment',
    'uses' => 'Adminauth\PaypalController@postPayment',
));
// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'Adminauth\PaypalController@getPaymentStatus',
));
});
Route::post('existingemailcheck', 'Adminauth\AuthController@existingEmailCheck');
Route::post('user-add', 'Adminauth\AuthController@register');
Route::post('sendemail', 'Adminauth\AuthController@sendEmail');
Route::post('user-login', 'Adminauth\AuthController@login');
Route::post('forgot-password', 'Adminauth\AuthController@forgotPassword');
Route::get('reset-password', 'Adminauth\AuthController@resetPassword');
Route::post('reset-password', 'Adminauth\AuthController@postResetPassword');
Route::get('confirm-email/{id}', 'Adminauth\AuthController@confirmEmail');
Route::post('/user/login', ['as' => 'user.login', 'uses' => 'UserController@login']);

Route::auth();
Route::group(['middleware' => 'auth'], function () {
	

});
Route::get('/email-confirmed','Adminauth\AuthController@emailConfirmed');
//pages
Route::get('/privacy-policy','PagesController@privacyPolicy');
Route::get('/terms-and-conditions','PagesController@termsAndConditions');
Route::get('/cookie-policy','PagesController@cookiePolicy');

Route::get('/file-uploaded','Adminauth\AuthController@uploadFileSuccess');

Route::get('/cart','IndexController@cart');
Route::post('/add-to-cart','IndexController@addToCart');
Route::get('/cart/remove/{id}','IndexController@cartRemove');