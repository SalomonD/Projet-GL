<?php
use App\Adherent;
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

Route::get('/actionnaire', function (){
    $adherents = Adherent::all();
    return view('actionnaire', compact('adherents'));
});

Route::get('/', function () {
    return view('index');
});

Route::get('/listeAdherents','NewAdherentController@index');

Route::get('/listAdherents','NewAdherentController@index2');

Route::get('/emprunts', 'EmprunntsController@listeAdherents');

        $adherents = Adherent::all();
        return view('emprunts', compact('adherents'));

Route::get('/repartition', function(){
    return view('repartition');
});
Route::get('/adherentsdef', function(){
    return view('AdherentsDefaillants');
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

    Route::post('/adherent/{id ?}/souscription', 'PartsController@store')->name('parts.souscription');
    Route::post('/adherent/{matricule}/souscription','PartsController@store');

    Route::post('/adherent/inscription', 'NewAdherentController@store')->name('inscription');

    Route::post('/adherent/{id ?}/effectuerEmprunt', 'EmpruntsController@verification')->name('emprunts.effectuerEmp');
    Route::post('/adherent/{matricule}/effectuerEmprunt','EmpruntsController@verification');

    Route::post('/adherent/{id ?}/reboursement', 'EmpruntsController@reboursement')->name('emprunts.reboursement');
    Route::post('/adherent/{matricule}/reboursement','EmpruntsController@reboursement');

});
