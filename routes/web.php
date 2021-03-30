<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\sendemail;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sendmail2', 'HomeController@sendmail2')->name('sendmail2');
Route::get('sendmail', function () {
    // sendemail::dispatch();
    $details = [
        'title' => 'Mail from HaffizSamad.live',
        'body' => 'This is for testing email using mailjet'
    ];
   
    \Mail::to('haffiz_ito@yahoo.com')->send(new \App\Mail\testMail($details));
   
    // dd("Email is Sent.");
});

Route::get('profile', function () {
    dd('verified');
    // Only verified users may enter...
})->middleware('verified');
