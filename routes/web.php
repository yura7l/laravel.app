<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tweet;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TweetController;

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

// Resource route for Tweets
Route::resource('tweets', TweetController::class);

// Resource route for Notes
Route::resource('notes', NoteController::class);
