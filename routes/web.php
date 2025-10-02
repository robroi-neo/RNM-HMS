<?php

use Illuminate\Support\Facades\Route;

$heading = "";

$suppliers = [
    [
        'id' => '1',
        'name' => 'Robroi Neo M. Dingal',
        'address' => '012, Zapote St. General Santos City',
    ],
    [
        'id' => '1',
        'name' => 'Robroi Neo M. Dingal',
        'address' => '012, Zapote St. General Santos City',
    ],
    [
        'id' => '1',
        'name' => 'Robroi Neo M. Dingal',
        'address' => '012, Zapote St. General Santos City',
    ],
    [
        'id' => '1',
        'name' => 'Robroi Neo M. Dingal',
        'address' => '012, Zapote St. General Santos City',
    ],

];

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

Route::get('/supplier', function () use ($suppliers) {
    $heading = "Supplier";
    return view('supplier', [
        'heading' => $heading,
        'suppliers' => $suppliers
    ]);
});

Route::get('/users', function () {
    $heading = "Users";
    return view('users', [
        'heading' => $heading
    ]);
});
