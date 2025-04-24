<?php

use App\Http\Controllers\VcardController;
use Illuminate\Support\Facades\Route;

Route::get("/",[VcardController::class,"home"]);
Route::post('/store', [VcardController::class, 'store'])->name('vcard.store');
Route::delete("/vcard/{vcard}",[VcardController::class, "deleteData"]); 

Route::get('search',[VcardController::class,'search']);