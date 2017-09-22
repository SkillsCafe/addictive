<?php

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

// Authentication Routes...
$this->get('login', 'Auth\AuthController@showLoginForm');
$this->post('login', 'Auth\AuthController@login');
$this->get('logout', 'Auth\AuthController@logout');
// Registration Routes...
$this->get('register', 'Auth\AuthController@showRegistrationForm');
$this->post('register', 'Auth\AuthController@register');
// Password Reset Routes...
$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
$this->post('password/reset', 'Auth\PasswordController@reset');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Dashboard@index');
Route::get('/courselaunch', 'CourseController@index');
Route::get('/courselaunch/{id}', function($id) {

    //$result = DB::table('SELECT * FROM assets WHERE id = ?', [$id]);
    $result = DB::select( DB::raw("SELECT * FROM assets WHERE id = ".$id));
    //$url = $result[0];
    return view('/courses/'.$result[0]->url);
    
});
Route::get('/coursecompleted/{id}/', function($id) {
    
    return view('/coursecompleted',
            [
                'id' => $id
            ]);
});

Route::get('/planner/dashboard', function(){
  
       return view('/courses/planner/dashboard');
});

Route::get('/planner/week', function(){
  
       return view('/courses/planner/week');
});