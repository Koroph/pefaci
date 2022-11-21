<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('init/users/profile/image/{user}', [UserController::class, 'initProfilImage'])
    ->name('users.init_profile_image');


