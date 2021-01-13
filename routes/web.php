<?php

use Illuminate\Support\Facades\Route;
use FireBender\Laravel\Widgets\Http\Controllers\ListWidgetsController;
use FireBender\Laravel\Widgets\Http\Controllers\AddWidgetController;
use FireBender\Laravel\Widgets\Http\Controllers\ViewWidgetController;
use FireBender\Laravel\Widgets\Http\Controllers\ModifyWidgetController;
use FireBender\Laravel\Widgets\Http\Controllers\DeleteWidgetController;

Route::prefix('widgets')->name('widgets.')->group(function () {
    Route::get('', ListWidgetsController::class)->name('index');
    Route::get('create', [AddWidgetController::class, 'create'])->name('create');
    Route::post('store', [AddWidgetController::class, 'store'])->name('store');
    Route::get('show/{id?}', ViewWidgetController::class)->name('show');
    Route::get('edit/{id?}', [ModifyWidgetController::class, 'edit'])->name('edit');
    Route::post('update', [ModifyWidgetController::class, 'update'])->name('update');
    Route::get('delete/{id?}', [DeleteWidgetController::class, 'delete'])->name('delete');
    Route::post('destroy', [DeleteWidgetController::class, 'destroy'])->name('destroy');
});

