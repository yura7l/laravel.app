<?php

use Illuminate\Support\Facades\Route;

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

// Get all tweets
Route::get('/tweets', function () {
    return view('tweets');
})->name('tweets');

// Show the form to create the tweet
Route::get('/create-tweet', function () {

});

// Create a tweet - handle a form to create a tweet
Route::post('/tweets', function () {

});

// Update a tweet
Route::put('/tweets/{tweetId}', function ($tweetId) {

});

// Delete a tweet
Route::delete('/tweets/{tweetId}', function ($tweetId) {

});
