<?php
 
Route::resource('reservation',App\Http\Controllers\ReservationController::class)->only(['index','store','show','update','destroy']);
