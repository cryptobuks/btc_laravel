<?php

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

Route::get('/',[ 'uses' => 'HomeController@index','as' => 'home']);
Route::get('/faq',[ 'uses' => 'FaqController@index','as' => 'faq']);
Route::get('/ourterms',[ 'uses' => 'OurtermsController@index','as' => 'ourterms']);
Route::get('/plandetails',[ 'uses' => 'PlandetailsController@index','as' => 'plandetails']);
Route::get('/privacypolicy',[ 'uses' => 'PrivacypolicyController@index','as' => 'privacypolicy']);
Route::get('/support',[ 'uses' => 'SupportController@index','as' => 'support']);
Route::post('/support',[ 'uses' => 'SupportController@store','as' => 'support']);
Route::get('/testimonies',[ 'uses' => 'TestimoniesController@index','as' => 'testimonies']);


Route::get('/signup',[ 'uses' => 'User\UserController@getSignup','as' => 'user.signup']);
Route::get('/signin',[ 'uses' => 'User\UserController@getSignin','as' => 'user.signin']);
Route::get('/profile', ['uses' => 'User\UserController@getProfile','as' => 'user.profile']);
Route::post('/signup', ['uses' => 'User\UserController@postSignup','as' => 'user.signup']);
Route::post('/signin', ['uses' => 'User\UserController@postSignin','as' => 'user.signin']);
//Route::get('/logout', ['uses' => 'User\UserController@getLogout','as' => 'user.logout']);


// Route::view('/public/terms', 'ourterms');
Route::get('/accountoverview',[ 'uses' => 'User\AccountoverviewController@index','as' => 'user.accountoverview','middleware' => 'is-front']);
Route::get('/buymatrixpositions',[ 'uses' => 'User\BuymatrixpositionsController@index','as' => 'user.buymatrixpositions','middleware' => 'is-front']);
Route::get('/cashoutsettings',[ 'uses' => 'User\CashoutsettingsController@index','as' => 'user.cashoutsettings','middleware' => 'is-front']);
Route::get('/commissions',[ 'uses' => 'User\CommissionsController@index','as' => 'user.commissions','middleware' => 'is-front']);
Route::get('/depositfunds',[ 'uses' => 'User\DepositfundsController@index','as' => 'user.depositfunds','middleware' => 'is-front']);
Route::get('/deposits',[ 'uses' => 'User\DepositsController@index','as' => 'user.deposits','middleware' => 'is-front']);
Route::get('/generalsettings',[ 'uses' => 'User\GeneralsettingsController@index','as' => 'user.generalsettings','middleware' => 'is-front']);

Route::put('/personalinfo',[ 'uses' => 'User\GeneralsettingsController@personalinfo','as' => 'user.personalinfo','middleware' => 'is-front']);
Route::put('/passreset',[ 'uses' => 'User\GeneralsettingsController@passreset','as' => 'user.passreset','middleware' => 'is-front']);
Route::put('/othersettings',[ 'uses' => 'User\GeneralsettingsController@othersettings','as' => 'user.othersettings','middleware' => 'is-front']);


Route::get('/positions',[ 'uses' => 'User\PositionsController@index','as' => 'user.positions','middleware' => 'is-front']);
Route::get('/promotiontools',[ 'uses' => 'User\PromotiontoolsController@index','as' => 'user.promotiontools','middleware' => 'is-front']);
Route::get('/referrals',[ 'uses' => 'User\ReferralsController@index','as' => 'user.referrals','middleware' => 'is-front']);
Route::get('/transactions',[ 'uses' => 'User\TransactionsController@index','as' => 'user.transactions','middleware' => 'is-front']);
Route::get('/viewmatrix',[ 'uses' => 'User\ViewmatrixController@index','as' => 'user.viewmatrix','middleware' => 'is-front']);
Route::get('/bcpopup',[ 'uses' => 'User\ViewmatrixController@bcpopup','as' => 'user.bcpopup','middleware' => 'is-front']);

Route::get('/lcpopup',[ 'uses' => 'User\ViewmatrixController@lcpopup','as' => 'user.lcpopup','middleware' => 'is-front']);
Route::get('/empopup',[ 'uses' => 'User\ViewmatrixController@empopup','as' => 'user.empopup','middleware' => 'is-front']);

Route::get('/litecoinmatrix',[ 'uses' => 'User\ViewmatrixController@litecoinmatrix','as' => 'user.litecoinmatrix','middleware' => 'is-front']);
Route::get('/ethereummatrix',[ 'uses' => 'User\ViewmatrixController@ethereummatrix','as' => 'user.ethereummatrix','middleware' => 'is-front']);
Route::get('/walletbalance',[ 'uses' => 'User\WalletbalanceController@index','as' => 'user.walletbalance','middleware' => 'is-front']);
Route::get('/withdrawals',[ 'uses' => 'User\WithdrawalsController@index','as' => 'user.withdrawals','middleware' => 'is-front']);
Route::get('/withdraw-funds',[ 'uses' => 'User\WithdrawfundsController@index','as' => 'user.withdrawfunds','middleware' => 'is-front']);


Route::get('admin/',[ 'uses' => 'Admin\UserController@index','as' => 'admin.index']);

Route::get('admin/home',[ 'uses' => 'Admin\HomeController@index','as' => 'admin.home','middleware' => 'is-admin']);
Route::get('admin/faqlist',[ 'uses' => 'Admin\FaqController@index','as' => 'admin.faqlist','middleware' => 'is-admin']);
Route::get('admin/faqadd',[ 'uses' => 'Admin\FaqController@create','as' => 'admin.faqadd','middleware' => 'is-admin']);
Route::post('admin/store',[ 'uses' => 'Admin\FaqController@store','as' => 'admin.store','middleware' => 'is-admin']);
Route::get('admin/faqedit',[ 'uses' => 'Admin\FaqController@edit','as' => 'admin.faqedit','middleware' => 'is-admin']);
Route::get('admin/faqview/{id}',[ 'uses' => 'Admin\FaqController@show','as' => 'admin.faqshow','middleware' => 'is-admin']);
Route::get( 'admin/faqedit/{id}/edit',[ 'uses' => 'Admin\FaqController@edit','as' => 'admin.faqedit','middleware' => 'is-admin']);
Route::put('admin/faqedit/{id}',[ 'uses' => 'Admin\FaqController@update','as' => 'admin.faqedit','middleware' => 'is-admin']);
Route::delete('admin/faqdel/{id}',[ 'uses' => 'Admin\FaqController@destroy','as' => 'admin.faqdel','middleware' => 'is-admin']);

Route::get('admin/testlist',[ 'uses' => 'Admin\TestController@index','as' => 'admin.testlist','middleware' => 'is-admin']);
Route::get('admin/testadd',[ 'uses' => 'Admin\TestController@create','as' => 'admin.testadd','middleware' => 'is-admin']);
Route::post('admin/store',[ 'uses' => 'Admin\TestController@store','as' => 'admin.store','middleware' => 'is-admin']);
Route::get('admin/testedit',[ 'uses' => 'Admin\TestController@edit','as' => 'admin.testedit','middleware' => 'is-admin']);
Route::get('admin/testview/{id}',[ 'uses' => 'Admin\TestController@show','as' => 'admin.testshow','middleware' => 'is-admin']);
Route::get( 'admin/testedit/{id}/edit',[ 'uses' => 'Admin\TestController@edit','as' => 'admin.testedit','middleware' => 'is-admin']);
Route::put('admin/testedit/{id}',[ 'uses' => 'Admin\TestController@update','as' => 'admin.testedit','middleware' => 'is-admin']);
Route::delete('admin/testdel/{id}',[ 'uses' => 'Admin\TestController@destroy','as' => 'admin.testdel','middleware' => 'is-admin']);

Route::get('admin/sliderlist',[ 'uses' => 'Admin\SliderController@index','as' => 'admin.sliderlist','middleware' => 'is-admin']);
Route::get('admin/slideradd',[ 'uses' => 'Admin\SliderController@create','as' => 'admin.slideradd','middleware' => 'is-admin']);
Route::post('admin/store',[ 'uses' => 'Admin\SliderController@store','as' => 'admin.store','middleware' => 'is-admin']);
Route::get('admin/slideredit',[ 'uses' => 'Admin\SliderController@edit','as' => 'admin.slideredit','middleware' => 'is-admin']);
Route::get('admin/sliderview/{id}',[ 'uses' => 'Admin\SliderController@show','as' => 'admin.slidershow','middleware' => 'is-admin']);
Route::get( 'admin/slideredit/{id}/edit',[ 'uses' => 'Admin\SliderController@edit','as' => 'admin.slideredit','middleware' => 'is-admin']);
Route::put('admin/slideredit/{id}',[ 'uses' => 'Admin\SliderController@update','as' => 'admin.slideredit','middleware' => 'is-admin']);
Route::delete('admin/sliderdel/{id}',[ 'uses' => 'Admin\SliderController@destroy','as' => 'admin.sliderdel','middleware' => 'is-admin']);

Route::get( 'admin/changepass/{id}',[ 'uses' => 'Admin\UserController@edit','as' => 'admin.changepass','middleware' => 'is-admin']);
Route::put('admin/changepass/{id}',[ 'uses' => 'Admin\UserController@update','as' => 'admin.changepass','middleware' => 'is-admin']);

Route::get('admin/supportlist',[ 'uses' => 'Admin\SupportController@index','as' => 'admin.supportlist','middleware' => 'is-admin']);
Route::get('admin/supportview/{id}',[ 'uses' => 'Admin\SupportController@show','as' => 'admin.supportshow','middleware' => 'is-admin']);
Route::delete('admin/supportdel/{id}',[ 'uses' => 'Admin\SupportController@destroy','as' => 'admin.supportdel','middleware' => 'is-admin']);

Route::get('admin/userlist',[ 'uses' => 'Admin\FauserController@index','as' => 'admin.userlist','middleware' => 'is-admin']);
Route::get('admin/useradd',[ 'uses' => 'Admin\FauserController@create','as' => 'admin.useradd','middleware' => 'is-admin']);
Route::post('admin/useradd',[ 'uses' => 'Admin\FauserController@store','as' => 'admin.useradd','middleware' => 'is-admin']);
Route::get('admin/useredit',[ 'uses' => 'Admin\FauserController@edit','as' => 'admin.useredit','middleware' => 'is-admin']);
Route::get('admin/userview/{id}',[ 'uses' => 'Admin\FauserController@show','as' => 'admin.userview','middleware' => 'is-admin']);
Route::get( 'admin/useredit/{id}/edit',[ 'uses' => 'Admin\FauserController@edit','as' => 'admin.useredit','middleware' => 'is-admin']);
Route::put('admin/useredit/{id}',[ 'uses' => 'Admin\FauserController@update','as' => 'admin.useredit','middleware' => 'is-admin']);
Route::delete('admin/userdel/{id}',[ 'uses' => 'Admin\FauserController@destroy','as' => 'admin.userdel','middleware' => 'is-admin']);

Route::get('admin/logout', function(){
   Auth::logout();
   return Redirect::to('admin/');
});

Auth::routes();

