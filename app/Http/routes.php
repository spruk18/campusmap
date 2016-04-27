<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::post('login', 'Auth\AuthController@authenticate');
// Route::get('logout',function()
// {
// 	Auth::logout();
// 	return redirect('/');
// });

Route::group(['middleware' => 'auth'], function() {
// lots of routes that require auth middleware
	Route::get('home',function (){
		if (Auth::check()) {
		    // The user is logged in...
		    return view('home');
		}
		else
		{
			return view('index');
		}
		
	});

	Route::resource('employee', 'EmployeeController');
	Route::resource('facility', 'FacilityController');
	Route::resource('department', 'DepartmentController');
	//Route::resource('employee/add', 'EmployeeController@addEmployee');
	// Route::get('employee','Employeecontroller@index');
	// Route::get('employee/add','Employeecontroller@addEmployeeView');
	// Route::post('employee/add','Employeecontroller@addEmployee');
	// Route::delete('employee/{employee}','Employeecontroller@destroy');

});



//Route::get('auth/login', 'Auth\AuthController@login');
Route::post('auth/login', 'Auth\AuthController@authenticate');
Route::get('auth/logout', 'Auth\AuthController@logout');

// Registration routes...
//Route::post('/register', 'Auth\AuthController@register');
