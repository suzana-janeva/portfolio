<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'portfolio']);
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');
