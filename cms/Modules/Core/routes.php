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
        Route::get('/bai-viet', 'ClientController@blog')->name('client.blog');
        Route::get('/bai-viet/{id}', 'ClientController@blogDetail')->name('client.blog-detail');
        Route::get('/thu-cung', 'ClientController@pet')->name('client.pet');
    });
    Route::group([
        'middleware' => ['auth']
    ], function () {
        Route::get('/thanh-toan', 'ClientController@payment')->name('client.payment');
        Route::get('/thanh-cong', 'ClientController@success')->name('client.payment.success');
        Route::post('/thanh-toan/checkout', 'ClientController@checkout')->name('client.payment.checkout');
    });
});
