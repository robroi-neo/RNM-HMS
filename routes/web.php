<?php

use Illuminate\Support\Facades\Route;
use App\Models\Supplier;


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

Route::get('/supplier', function () {
    $heading = "Supplier Records";
    
    return view('supplier', [
        'heading' => $heading,
        'suppliers' => Supplier::paginate(8)
    ]);
});

Route::get('/users', function () {
    $heading = "Users";
    return view('users', [
        'heading' => $heading
    ]);
});
