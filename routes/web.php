<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Http\Requests\BuildingsCreateRequest;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/buildings', function () {
    $buildings = \App\Buildings::latest()->get();
    return view('buildings.list', compact('buildings'));
});

Route::get('/buildings/create', function() {
    return view('buildings.create');
});

Route::get('/buildings/{id}', function($id) {
    $building = \App\Buildings::with('apartments')->findOrFail($id);
    return view('buildings.show', compact('building'));
});

Route::post('/buildings/create', function(BuildingsCreateRequest $buildingsCreateRequest) {
    $building = new \App\Buildings(request()->only(['name', 'address']));
    $building->photo = request()->file('photo')->store('buildings');
    $building->save();

    return redirect('/buildings');
});