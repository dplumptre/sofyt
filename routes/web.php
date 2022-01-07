<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('index');


Route::group(['prefix' => 'welcome'], function () {

    Route::get('about', [WelcomeController::class, 'about'])->name('about');
    Route::get('our-team', [WelcomeController::class, 'team'])->name('team');
    Route::get('services', [WelcomeController::class, 'services'])->name('services');
    Route::get('contact', [WelcomeController::class, 'contact'])->name('contact');
    Route::post('contact', [WelcomeController::class, 'post_contact'])->name('post.contact');
    Route::get('school-partner', [WelcomeController::class, 'sp'])->name('school.partners');
    Route::get('gallery', [WelcomeController::class, 'gallery'])->name('gallery');
    Route::get('visa-form', [WelcomeController::class, 'visa'])->name('visa.form');
    Route::post('visa-form', [WelcomeController::class, 'post_visa'])->name('post.visa');
    Route::get('school-form', [WelcomeController::class, 'school'])->name('school.form');
    Route::post('school-form', [WelcomeController::class, 'post_school'])->name('post.school');
    Route::get('refresh-captcha', [WelcomeController::class, 'refreshCaptcha'])->name('refresh_captcha');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'home'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home.users');
    Route::get('/create-user', [HomeController::class, 'create'])->name('home.create');
    Route::post('/create-user', [HomeController::class, 'createUser'])->name('create.user');
    Route::get('/delete-user/{data}', [HomeController::class, 'deleteUser'])->name('delete.user');

    Route::get('/test', [HomeController::class, 'test'])->name('test');
    Route::get('/create-test', [HomeController::class, 'createtest'])->name('create.test');
    Route::post('/create-test', [HomeController::class, 'postTest'])->name('post.test');
    Route::get('/delete-test/{data}', [HomeController::class, 'deleteTest'])->name('delete.test');

    Route::get('/visa-applications', [HomeController::class, 'visa'])->name('home.visa');
    Route::get('/visa-applications/{data}', [HomeController::class, 'visaDelete'])->name('delete.visa');
    Route::get('/school-applications', [HomeController::class, 'school'])->name('home.school');
    Route::get('/school-applications/{data}', [HomeController::class, 'schoolDelete'])->name('delete.school');


    Route::get('/visa-applications-details/{details}', [HomeController::class, 'visaDetails'])->name('visa.details');
    Route::get('/school-applications-details/{details}', [HomeController::class, 'schoolDetails'])->name('school.details');
});

