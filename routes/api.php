<?php

use App\Http\Controllers\SeriesController;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/series', [SeriesController::class, 'index']);
