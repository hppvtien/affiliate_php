<?php

use App\Models\Uni_Contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/c', function () {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('route:clear');
    $run = Artisan::call('config:cache');
    $run = Artisan::call('storage:link');
    return 'FINISHED';
});
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('change-language/{language}', '\App\Http\Controllers\Controller@changeLanguage')
        ->name('user.change-language');
    Route::group(['middleware' => 'locale','filltercountview'], function () {

        // Route::prefix('{language?}')->group(function () {
        Route::post('/dang-nhap', 'LoginController@login')->name('post.login');
        Route::post('/b2b', 'RegisterController@registerb2b')->name('post.register.b2b');
        Route::post('/dang-ky-spice-club', 'SpiceClubController@registerspiceclub')->name('post.register.spiceclub');
        Route::post('/dang-ky-spice-club/edit/{id}', 'SpiceClubController@update_spiceclub')->name('post_edit_user.register.spiceclub');
        Route::post('/dang-ky', 'RegisterController@register')->name('post.register');
        Route::post('/forget-password', 'RegisterController@postforgetpassword')->name('post.forgetpassword');
        Route::post('/forget-password{reset_code}', 'RegisterController@postresetcodepassword')->name('post.resetcodepassword');
        Route::post('san-pham/{slug?}.html', 'CategoryController@fillter_product')->name('get.fillter');
        Route::post('cua-hang', 'FindStoreController@searchName');
        Route::post('san-pham/{slug?}/thembinhluan', 'ProductController@thembinhluan')->name('get.product_comment');
        Route::post('lien-he', 'Uni_ContactController@submitContact')->name('post.uni_contact');
        Route::post('newsletters', 'Uni_ContactController@getNewsLetters')->name('post.uni_contact.newsletters');
        Route::post('bai-viet', 'BlogHomeController@fillter_post');
        Route::post('bai-viet/{slug?}/add_comment_post', 'BlogHomeController@add_comment_post')->name('get_blog.add_comment_post');
        Route::post('/', 'HomeController@product_trade')->name('get.product_trade');
        // Route::post('/unm.ly/{slug?}', 'ShortLinkController@countViewShortLink')->name('get.countViewShortLink');
        Route::post('/count', 'ShortLyController@view_count')->name('get.count_view');
        
        Route::prefix('vi')->middleware('locale')->group(function () {
            Route::get('/unm.ly/{slug?}', 'ShortLyController@index')->name('get.shortly');
            Route::get('/count', 'ShortLyController@index_count')->name('get.count');
            Route::get('/', 'HomeController@index')->name('get.home');

            Route::get('spice-club', 'SpiceClubController@index')->name('get.spice_club');

            Route::get('/dang-nhap', 'LoginController@index')->name('get.login');
            Route::get('/login', 'LoginController@index')->name('get.login');

            Route::get('/dang-ky-spice-club', 'SpiceClubController@spiceclub')->name('get.register.spiceclub');
            Route::get('/spice-club-register', 'SpiceClubController@spiceclub')->name('get.register.spiceclub');

            Route::get('/b2b', 'RegisterController@indexb2b')->name('get.register.b2b');

            Route::get('/dang-ky', 'RegisterController@index')->name('get.register');
            Route::get('/register', 'RegisterController@index')->name('get.register');

            Route::get('/dang-xuat', 'RegisterController@logout')->name('get.logout');
            Route::get('/logout', 'RegisterController@logout')->name('get.logout');

            Route::get('/verify-email/{code_verication}', 'RegisterController@verify_email')->name('verify.email');

            Route::get('/forget-password', 'RegisterController@forgetpassword')->name('get.forgetpassword');

            Route::get('/forget-password{reset_code}', 'RegisterController@get_reset_code')->name('get.resetcodepassword');

            Route::get('san-pham.html', 'CategoryController@all_product')->name('get.all_product');
            Route::get('product.html', 'CategoryController@all_product')->name('get.all_product');

            Route::get('thuong-hieu/{slug?}.html', 'CategoryController@trade_mark')->name('get.trade_product');
            Route::get('trade-mark/{slug?}.html', 'CategoryController@trade_mark')->name('get.trade_product');

            Route::get('/gioi-thieu', 'AboutController@index')->name('get.about');
            Route::get('/about-us', 'AboutController@index')->name('get.about');

            Route::get('gio-hang', 'CartController@index')->name('get.cart');
            Route::get('cart', 'CartController@index')->name('get.cart');

            Route::get('san-pham/{slug?}.html', 'CategoryController@index')->name('get.category');
            Route::get('product/{slug?}.html', 'CategoryController@index')->name('get.category');

            Route::get('faq', 'FaqsController@index')->name('get.faq');

            // Route::get( trans('route_t.findstore'), 'FindStoreController@index')->name('get.find');
            Route::get('find-store', 'FindStoreController@index')->name('get.find');
            Route::get('tim-cua-hang', 'FindStoreController@index')->name('get.find');

            Route::get('khuyen-mai', 'FlashSaleController@index')->name('vi.get.flashsale');
            Route::get('promotion', 'FlashSaleController@index')->name('en.get.flashsale');

            Route::get('khuyen-mai/{slug?}', 'FlashSaleController@singleFlashSale')->name('get.flashsale.single');
            Route::get('promotion/{slug?}', 'FlashSaleController@singleFlashSale')->name('get.flashsale.single');

            Route::get('member', 'MembershipController@index')->name('get.membership');

            Route::get('san-pham/{slug?}', 'ProductController@index')->name('get.product');
            Route::get('product/{slug?}', 'ProductController@index')->name('get.product');

            Route::get('lien-he', 'Uni_ContactController@index')->name('get.uni_contact');
            Route::get('contact', 'Uni_ContactController@index')->name('get.uni_contact');

            Route::get('tim-kiem', 'SearchController@search')->name('get.search');
            Route::get('search', 'SearchController@search')->name('get.search');

            Route::get('bai-viet', 'BlogHomeController@index')->name('get_blog.home');
            Route::get('blog', 'BlogHomeController@index')->name('get_blog.home');

            Route::get('bai-viet/{slug?}', 'BlogHomeController@SingleBlog')->name('get_blog.single_blog');
            Route::get('blog/{slug?}', 'BlogHomeController@SingleBlog')->name('get_blog.single_blog');

            Route::get('thoa-thuan-su-dung/{slug}', 'BlogHomeController@SinglePolice')->name('get_blog.single_police');
            Route::get('terms-of-use/{slug}', 'BlogHomeController@SinglePolice')->name('get_blog.single_police');

            Route::get('danh-muc-bai-viet/{slug?}', 'BlogHomeController@SingleCat')->name('get_blog.single_cat');
            Route::get('cat-blog/{slug?}', 'BlogHomeController@SingleCat')->name('get_blog.single_cat');

            Route::get('thoa-thuan-su-dung', 'BlogHomeController@ThoaThuan')->name('get.thoa_thuan_su_dung');
            Route::get('terms-of-use', 'BlogHomeController@ThoaThuan')->name('get.thoa_thuan_su_dung');

            Route::get('chinh-sach-bao-mat', 'HomeController@BaoMat')->name('get.chinh_sach_bao_mat');
            Route::get('privacy-policy', 'HomeController@BaoMat')->name('get.chinh_sach_bao_mat');

            Route::get('sitemap', 'SitemapController@sitemap')->name('get_site_map');

            Route::get('/verify-email-new/{code_verication?}', 'Uni_ContactController@verify_email_new')->name('verify.email.new');
        });
    });
});
