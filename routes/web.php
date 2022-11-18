<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\CampsController;
use App\Models\Camp;

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

Route::get('/', function () {return redirect('characters');});

Route::get('characters', [CharactersController::class, 'index'])->name('characters.index');
Route::get('characters/create',[CharactersController::class, 'create'])->name('characters.create');
Route::get('characters/{id}', [CharactersController::class, 'show'])->where('id','[0-9]+')->name('characters.show');
Route::delete('characters/delete/{id}', [CharactersController::class, 'destroy'])->where('id','[0-9]+')->name('characters.destroy');

Route::get('camps', [CampsController::class, 'index'])->name('camps.index');
Route::get('camps/create',[CampsController::class, 'create'])->name('camps.create');
Route::get('camps/{id}', [CampsController::class, 'show'])->name('camps.show');
Route::delete('camps/delete/{id}', [CampsController::class, 'destroy'])->where('id', '[0-9]+')->name('camps.destroy');
