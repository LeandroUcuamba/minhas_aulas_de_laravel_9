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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contactos', function () { //parametro a passar na url;
    return view('contact'); //esse é o nome do arquivo blade;
});

Route::get('/produtos', function () {
    
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_testes/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
