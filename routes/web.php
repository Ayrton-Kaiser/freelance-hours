<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::view('/', [ProjectsController::class, 'index'])->name('projects.index');

Route::view('/projects/{project}', [ProjectsController::class, 'show'])->name('projects.show');
