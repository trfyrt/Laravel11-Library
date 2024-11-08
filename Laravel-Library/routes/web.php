<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CdsController;
use App\Http\Controllers\FinalYearsProjectsController;
use App\Http\Controllers\JournalsController;
use App\Http\Controllers\NewsPapersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/{sort?}', [BooksController::class, 'index']);
Route::get('/cds/{sort?}', [CdsController::class, 'index']);
Route::get('/fyps/{sort?}', [FinalYearsProjectsController::class, 'index']);
Route::get('/journals/{sort?}', [JournalsController::class, 'index']);
Route::get('/newspapers/{sort?}', [NewsPapersController::class, 'index']);
Route::get('/catalogue/{type?}/{sort?}', [CatalogueController::class, 'index']);

