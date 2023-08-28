<?php

use App\Http\Controllers\Event;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\EventCollectionIterator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Event::class, 'index']);

Route::get('/event/create', [Event::class, 'create']);

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos', function () {

    $busca = request('search');

    $context = [
        "busca" => $busca,
    ];

    return view('produtos',$context);
});

Route::get('/product/{id?}', function ($id = null) {

    $context = [
        "id" => $id,
    ];

    return view('product', $context);
});
