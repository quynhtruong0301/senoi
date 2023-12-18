<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Cms\Modules\Core\Controllers',
    'middleware' => ['web'],
], function () {
    Route::get('/dang-nhap', 'AuthController@login')->name('client.login');
    Route::post('/dang-nhap', 'AuthController@postLogin')->name('client.post-login');
    Route::get('/dang-ky', 'AuthController@register')->name('client.register');
    Route::post('/dang-ky', 'AuthController@postRegister')->name('client.post-register');
    Route::get('/dang-nhap/{social}', 'AuthController@socialRedirect')->name('client.login-social');
    Route::get('/dang-nhap/{social}/callback', 'AuthController@socialCallback')->name('client.login-social.callback');
    Route::group([
        'middleware' => []
    ], function () {
        Route::get('/dang-xuat', 'AuthController@logout')->name('client.logout');
        Route::get('/', 'ClientController@index')->name('client.home');
        Route::get('/ve-chung-toi', 'ClientController@about')->name('client.about');
        Route::get('/lien-he', 'ClientController@contact')->name('client.contact');
        Route::post('/lien-he', 'ClientController@storeContact')->name('client.contact-store');
        Route::get('/bai-viet', 'ClientController@blog')->name('client.blog');
        Route::get('/bai-viet/{id}', 'ClientController@blogDetail')->name('client.blog-detail');
        Route::get('/thu-cung', 'ClientController@pet')->name('client.pet');
    });
    Route::group([
        'middleware' => ['auth']
    ], function () {
        Route::get('/thu-cung-cua-toi', 'ClientController@myPet')->name('client.my-pet');
        Route::get('/chi-tiet-thu-cung/{id}', 'ClientController@detailPet')->name('client.detail-pet');
        Route::get('/tao-thu-cung', 'ClientController@createPet')->name('client.pet-create');
        Route::post('/tao-thu-cung', 'ClientController@storePet')->name('client.pet-store');
        Route::get('/thong-tin-ca-nhan', 'ClientController@profile')->name('client.profile');
        Route::post('/cap-nhat-thong-tin-ca-nhan', 'ClientController@updateProfile')->name('client.profile-update');
        Route::post('/binh-luan', 'ClientController@storeComment')->name('client.comment-store');
        Route::get('/thanh-toan', 'ClientController@payment')->name('client.payment');
        Route::get('/thanh-cong', 'ClientController@success')->name('client.payment.success');
        Route::post('/thanh-toan/checkout', 'ClientController@checkout')->name('client.payment.checkout');
    });
});
