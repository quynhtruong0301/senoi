<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Cms\Modules\Admin\Controllers',
    'middleware' => ['web'],
], function () {
    Route::get('/login', 'AuthController@login')->name('admin.login');
    Route::post('/login', 'AuthController@postLogin')->name('admin.post-login');
    Route::group([
        'middleware' => ['admin.authenticated']
    ], function () {
        // logout
        Route::get('/logout', 'AuthController@logout')
            ->name('admin.logout');

        // dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');


        // User
        Route::group([
            'prefix' => 'user',
        ], function () {
            Route::get('/', 'UserController@index')->name('admin.user.index');
            Route::post('/delete/{id}', 'UserController@delete')->name('admin.user.delete');
        });

        // Category
        Route::group([
            'prefix' => 'category'
        ], function () {
            Route::get('/', 'CategoryController@index')->name('admin.category.index');
            Route::get('/detail/{id}', 'CategoryController@detail')->name('admin.category.detail');
            Route::get('/create', 'CategoryController@create')->name('admin.category.create');
            Route::post('/store', 'CategoryController@store')->name('admin.category.store');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
            Route::post('/update/{id}', 'CategoryController@update')->name('admin.category.update');
            Route::post('/delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
        });

        // Blog
        Route::group([
            'prefix' => 'blog'
        ], function () {
            Route::get('/', 'BlogController@index')->name('admin.blog.index');
            Route::get('/detail/{id}', 'BlogController@detail')->name('admin.blog.detail');
            Route::get('/create', 'BlogController@create')->name('admin.blog.create');
            Route::post('/store', 'BlogController@store')->name('admin.blog.store');
            Route::get('/edit/{id}', 'BlogController@edit')->name('admin.blog.edit');
            Route::post('/update/{id}', 'BlogController@update')->name('admin.blog.update');
            Route::post('/delete/{id}', 'BlogController@delete')->name('admin.blog.delete');
        });

        // Attribute
        Route::group([
            'prefix' => 'attribute'
        ], function () {
            Route::get('/', 'AttributeController@index')->name('admin.attribute.index');
            Route::get('/detail/{id}', 'AttributeController@detail')->name('admin.attribute.detail');
            Route::get('/create', 'AttributeController@create')->name('admin.attribute.create');
            Route::post('/store', 'AttributeController@store')->name('admin.attribute.store');
            Route::get('/edit/{id}', 'AttributeController@edit')->name('admin.attribute.edit');
            Route::post('/update/{id}', 'AttributeController@update')->name('admin.attribute.update');
            Route::post('/delete/{id}', 'AttributeController@delete')->name('admin.attribute.delete');
        });

        // Pet
        Route::group([
            'prefix' => 'pet'
        ], function () {
            Route::get('/', 'PetController@index')->name('admin.pet.index');
            Route::get('/detail/{id}', 'PetController@detail')->name('admin.pet.detail');
            Route::get('/create', 'PetController@create')->name('admin.pet.create');
            Route::post('/store', 'PetController@store')->name('admin.pet.store');
            Route::get('/edit/{id}', 'PetController@edit')->name('admin.pet.edit');
            Route::post('/update/{id}', 'PetController@update')->name('admin.pet.update');
            Route::post('/delete/{id}', 'PetController@delete')->name('admin.pet.delete');
        });

        // Topic
        Route::group([
            'prefix' => 'topic'
        ], function () {
            Route::get('/', 'TopicController@index')->name('admin.topic.index');
            Route::get('/detail/{id}', 'TopicController@detail')->name('admin.topic.detail');
            Route::get('/create', 'TopicController@create')->name('admin.topic.create');
            Route::post('/store', 'TopicController@store')->name('admin.topic.store');
            Route::get('/edit/{id}', 'TopicController@edit')->name('admin.topic.edit');
            Route::post('/update/{id}', 'TopicController@update')->name('admin.topic.update');
            Route::post('/delete/{id}', 'TopicController@delete')->name('admin.topic.delete');
        });

        // Banner
        Route::group([
            'prefix' => 'banner'
        ], function () {
            Route::get('/', 'BannerController@index')->name('admin.banner.index');
            Route::get('/detail/{id}', 'BannerController@detail')->name('admin.banner.detail');
            Route::get('/create', 'BannerController@create')->name('admin.banner.create');
            Route::post('/store', 'BannerController@store')->name('admin.banner.store');
            Route::get('/edit/{id}', 'BannerController@edit')->name('admin.banner.edit');
            Route::post('/update/{id}', 'BannerController@update')->name('admin.banner.update');
            Route::post('/delete/{id}', 'BannerController@delete')->name('admin.banner.delete');
        });

        Route::group([
            'prefix' => 'contact'
        ], function () {
            Route::get('/', 'ContactController@index')->name('admin.contact.index');
            Route::get('/detail/{id}', 'ContactBlogController@detail')->name('admin.contact.detail');
            Route::get('/create', 'ContactController@create')->name('admin.contact.create');
            Route::post('/store', 'ContactController@store')->name('admin.contact.store');
            Route::get('/edit/{id}', 'ContactController@edit')->name('admin.contact.edit');
            Route::post('/update/{id}', 'ContactController@update')->name('admin.contact.update');
            Route::post('/delete/{id}', 'ContactController@delete')->name('admin.contact.delete');
        });
    });
});
