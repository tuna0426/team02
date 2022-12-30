<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\CampsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {return $request->user();});
/*
Route::get('characters', [CharactersController::class, 'index'])->name('characters.index');
Route::post('characters/type', [CharactersController::class, 'type'])->name('characters.type');
Route::get('characters/create',[CharactersController::class, 'create'])->name('characters.create');
Route::get('characters/{id}', [CharactersController::class, 'show'])->where('id','[0-9]+')->name('characters.show');
Route::post('characters/store',[CharactersController::class,'store'])->name('Characters.store');
Route::get('characters/{id}/edit', [CharactersController::class, 'edit'])->where('id', '[0-9]+')->name('characters.edit');
Route::patch('characters/update/{id}', [CharactersController::class, 'update'])->where('id', '[0-9]+')->name('characters.update');
Route::delete('characters/delete/{id}', [CharactersController::class, 'destroy'])->where('id','[0-9]+')->name('characters.destroy');
//Route::delete('characters/delete/{id}', function () { return "Hello";})->where('id','[0-9]+')->name('characters.destroy');

Route::get('camps', [CampsController::class, 'index'])->name('camps.index');
Route::get('camps/create',[CampsController::class, 'create'])->name('camps.create');
Route::get('camps/{id}', [CampsController::class, 'show'])->where('id', '[0-9]+')->name('camps.show');
Route::post('camps/store',[CampsController::class,'store'])->name('camps.store');
Route::get('camps/{id}/edit', [CampsController::class, 'edit'])->where('id', '[0-9]+')->name('camps.edit');
Route::patch('camps/update/{id}', [CampsController::class, 'update'])->where('id', '[0-9]+')->name('camps.update');
Route::delete('camps/delete/{id}', [CampsController::class, 'destroy'])->where('id', '[0-9]+')->name('camps.destroy');
