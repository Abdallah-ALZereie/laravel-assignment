<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/submit-form', [FormController::class, 'showForm']);
Route::post('/submit-form', [FormController::class, 'processForm']);
