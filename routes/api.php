<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PalettesController;
use App\Http\Controllers\ColorsController;

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


Route::apiResource('/categories',CategoriesController::class);
Route::apiResource('/palettes',PalettesController::class);
Route::get('/palette-colors/{id}',[PalettesController::class,'getPaletteColors']);
Route::apiResource('/colors',ColorsController::class);
Route::get('/palettecolors',[ColorsController::class,'getPaletteColor']);
Route::Post('/palettecolors',[ColorsController::class,'insert']);
