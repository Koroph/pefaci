<?php

use App\Http\Controllers\Web\MainController;
use Illuminate\Support\Facades\Route;

Route::get("/",[MainController::class,'index'])->name('web.index');




