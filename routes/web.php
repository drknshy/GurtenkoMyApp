<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::redirect('/', '/login')->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';

Route::middleware(['auth', 'admin'])->group(function () {
    Volt::route('admin/orders', 'admin.orders')->name('admin.orders');
});

Route::middleware(['auth', 'user'])->group(function () {
    Volt::route('orders', 'orders.index')->name('orders.index');
    Volt::route('orders/create', 'orders.create')->name('orders.create');
});


