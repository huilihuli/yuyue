<?php
// 后台路由
use think\facade\Route;

Route::group(['prefix' => 'admin/', 'name' => 'admin'], function () {
    // 登录
    Route::get('login', 'login/index')->name('admin/login/index');
    Route::post('login', 'login/loginHandler')->name('admin/login/index');

    Route::group(['middleware'=>['CheckLogin']],function (){

        // 后台首页
        Route::get('index', 'index/index')->name('admin/index/index');
        // 欢迎页
        Route::get('welcome','index/welcome')->name('admin/index/welcome');

        // 资源路由
        Route::resource('art','article');

    });
});