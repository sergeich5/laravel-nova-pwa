<?php

use Illuminate\Support\Facades\Route;

Route::get('/nova-pwa/app.manifest', fn() => response()->json(config('nova-pwa', [])))->name('nova-pwa-manifest');
