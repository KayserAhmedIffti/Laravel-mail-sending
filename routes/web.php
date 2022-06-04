<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MailConfigController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration/signin', function () {
    return view('signin');
});
Route::get('/registration', function () {
    return view('registration');
});

Route::get('/items',[ItemController::class,'index']);
Route::post('/item-store',[ItemController::class,'store']);
Route::post('/send-email',[EmailController::class,'send']);


Route::get('/mail-configurations', function () {
    return view('mailConfig');
})->name('mail-configurations');


Route::post('/mail-config-store',[MailConfigController::class, 'store']);

Auth::routes();

//Auth::routes(['register'=>false]); registration button will be disable
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice'); //This route are showing verification

Route::post('resent-email',[App\Http\Controllers\HomeController::class, 'resend'])->name('verification.resend');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/single-data-show/{id}',[MailConfigController::class, 'show']);

Route::get('/data-show',[MailConfigController::class, 'index'])->name('data.show.index');

Route::resource('post', MailConfigController::class);

// Route::get('edit/{id}', [MailConfigController::class, 'edit'])->name('post.edit');