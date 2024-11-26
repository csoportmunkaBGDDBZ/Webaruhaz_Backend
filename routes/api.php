<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/products", [ProductController::class, 'index']);
Route::get("/product/{product_id}", [ProductController::class, 'show']);
Route::post("/product", [ProductController::class, 'store']);
Route::put("/product/{product_id}", [ProductController::class, 'update']);
Route::delete("/product/{product_id}", [ProductController::class, 'destroy']);

//Route::get("/basket", [BasketController::class, 'index']);
