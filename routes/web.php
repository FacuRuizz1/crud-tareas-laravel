<?php

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::resource('tareas', TareaController::class);