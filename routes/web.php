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

Route::get('home', function() {
    return response()->make('Fuck you!');
});

Route::get('dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('apply', function() {
    return view('apply');
})->name('apply');

// In order to build a signed URL to access a given route, the route must have a name:
// Route::get('invitations/{invitation}/{answer}', 'InvitationController')->name('invitations')->middleware('signed');

// Generate a normal link
// URL::route('invitations', ['invitation' => 12345, 'answer' => 'yes']);
// Generate a signed link
// URL::signedRoute('invitations', ['invitation' => 12345, 'answer' => 'yes']);
// Generate an expiring (temporary) signed link
// URL::temporarySignedRoute(
//     'invitations',
//     now()->addHours(4),
//     ['invitation' => 12345, 'answer' => 'yes']
// );

// Route::get('tasks', function() {
//     return view('tasks.index')->with('tasks', Task::all()); // Task::all() is an Eloquent database query
// });

// returns resources/views/welcome.blade.php
// Route::view('/', 'welcome');
// passing simple data to Route::view()
// Route::view('/', 'welcome', ['User' => 'Michael']);

Route::get('/', 'TasksController@index');
Route::get('tasks/create', 'TasksController@create');
// Route::post('tasks', 'TasksController@store');
Route::resource('tasks', 'TasksController');
Route::resource('blabla', 'MySampleResourceController');
Route::apiResource('sample-api', 'MySampleResourceAPIController');
Route::post('users/{user}/update-avatar', 'UpdateUserAvatar');

// implicit route model binding
// Conference is a model
// {conference} is always an id because route model binding in laravel looks in the database by primary key
Route::get('conferences/{conference}', function(Conference $conference) {
    return view('conferences.show')->with('conference', $conference);
});

// Route::get('conferences/{conference}', 'TasksController@show')->name('tasks.show');