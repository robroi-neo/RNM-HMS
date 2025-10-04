<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SupplierController;


Route::get('/', function () {
    $heading = "Dashboard";
    return view('dashboard', [
        'heading' => $heading
    ]);
});

Route::get('/pos', function () {
    $heading = "Point of Sales";
    return view('pos', [
        'heading' => $heading
    ]);
});

Route::get('/purchasing', function () {
    $heading = "Purchasing";
    return view('purchasing', [
        'heading' => $heading
    ]);
});

Route::get('/inventory', function () {
    $heading = "Inventory";
    return view('inventory', [
        'heading' => $heading
    ]);
});


Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');

Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store');


Route::get('/users', function () {
    $heading = "Users";
    return view('users', [
        'heading' => $heading
    ]);
});
