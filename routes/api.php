<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('teste', function () {
    return "testando";
});

/*Route::post('testamento', [\App\Http\Controllers\TestamentoController::class, 'store']);
Route::get('testamento', [\App\Http\Controllers\TestamentoController::class, 'index']);
Route::get('testamento/{id}', [\App\Http\Controllers\TestamentoController::class, 'show']);
Route::put('testamento/{id}', [\App\Http\Controllers\TestamentoController::class, 'update']);
Route::delete('testamento/{id}', [\App\Http\Controllers\TestamentoController::class, 'destroy']);

Route::post('livro', [\App\Http\Controllers\LivroController::class, 'store']);
Route::get('livro', [\App\Http\Controllers\LivroController::class, 'index']);
Route::get('livro/{id}', [\App\Http\Controllers\LivroController::class, 'show']);
Route::put('livro/{id}', [\App\Http\Controllers\LivroController::class, 'update']);
Route::delete('livro/{id}', [\App\Http\Controllers\LivroController::class, 'destroy']);


Route::post('versiculo', [\App\Http\Controllers\VersiculoController::class, 'store']);
Route::get('versiculo', [\App\Http\Controllers\VersiculoController::class, 'index']);
Route::get('versiculo/{id}', [\App\Http\Controllers\VersiculoController::class, 'show']);
Route::put('versiculo/{id}', [\App\Http\Controllers\VersiculoController::class, 'update']);
Route::delete('versiculo/{id}', [\App\Http\Controllers\VersiculoController::class, 'destroy']);*/

Route::group(['middleware' =>['auth:sanctum']], function() {
    Route::apiResources([
        'testamento' => \App\Http\Controllers\TestamentoController::class,
        'livro' => \App\Http\Controllers\LivroController::class,
        'versiculo' => \App\Http\Controllers\VersiculoController::class,

    ]);
});


Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
