<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    $controller = new CarController();
    return $controller->index();
})->name('cars.show');

Route::get('/cars/{id}/edit', function($id){
    $controller = new CarController();
    return $controller->edit($id);
})->name('cars.edit');

Route::put('/cars/{id}', function($id){
    $controller = new CarController();
    return $controller->update($id);
})->name('cars.update');



