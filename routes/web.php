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

Route::get('/', function () {
    return view('index');
});

/***New Routes */
Route::resource('adherent','NewAdherentController');
Route::resource('part','PartsController');
Route::resource('Fond','FondController');

//Route::post('product/image-upload/{productId}','ProductsController@uploadImages');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**Définition des routes de l'admin */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', 'AdminController@index');
});

/**Routes de connexion */
Route::group(['middleware' => 'web'], function(){
    Route::auth();
    Route::get('/', function () {
        return view('index');
    });
    Route::post('/login', 'LoginController@login');
    Route::get('/logout','LoginController@logout');
});

 
Route::group(['middleware' => 'admin'], function(){
    Route::get('/listeAdherents','NewAdherentController@index');
    Route::get('/listAdherents','NewAdherentController@index2');
    Route::get('/emprunts', function(){
        return view('emprunts');
        });
    Route::get('/repartition', 'RepartitionController@index');
    Route::get('/adherentsdef', function(){
        return view('AdherentsDefaillants');
    });
    Route::post('/adherent/{matricule}/souscription', 'PartsController@store')->name('parts.souscription');
    Route::post('/adherent/inscription', 'NewAdherentController@store')->name('inscription');
});

