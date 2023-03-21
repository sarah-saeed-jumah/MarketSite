<?php

use App\Http\Controllers\ContactController;
use App\Mail\NewMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Extention for implement model  is : PHP Intelephense
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

Route::get('index', function () {
    return view('index');
});

// Route::get('email', function(){
//     Mail::to('sarasaeedjuma382@gmail.com')->send(new NewMail());
// return new NewMail();

// });

Route::post('/sendEmail',[ContactController::class,'sendEmail'])->name('send.email');

Route::get('test', function () {
    return view('emails.Contact');
});
