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
Route::put("/productEdit/{product_id}", [ProductController::class, 'update']);
Route::delete("/productDelete/{product_id}", [ProductController::class, 'destroy']);

Route::get("/basket-with-data", [BasketController::class, 'basketData']);
Route::post("/fill-basket", [BasketController::class, 'store']);

//Dominik kérései
Route::get("/categories", [ProductController::class, 'categories']);


