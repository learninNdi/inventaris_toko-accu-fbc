<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Middleware\IsLogin;

// PRODUCT
Route::get('/', [ProductController::class, 'index']);
Route::get('/products', [ProductController::class, 'show']);

Route::middleware(IsLogin::class)->group(function () {
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/products/store', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'delete']);

    // BRAND
    Route::get('/brands', [BrandController::class, 'index']);
    Route::get('/brands/create', [BrandController::class, 'create']);
    Route::get('/brands/edit/{id}', [BrandController::class, 'edit']);
    Route::post('/brands/store', [BrandController::class, 'store']);
    Route::put('/brands/update/{id}', [BrandController::class, 'update']);
    Route::delete('/brands/{id}', [BrandController::class, 'delete']);

    // TYPE
    Route::get('/types', [TypeController::class, 'index']);
    Route::get('/types/create', [TypeController::class, 'create']);
    Route::get('/types/edit/{id}', [TypeController::class, 'edit']);
    Route::post('/types/store', [TypeController::class, 'store']);
    Route::put('/types/update/{id}', [TypeController::class, 'update']);
    Route::delete('/types/{id}', [TypeController::class, 'delete']);

    // EXPENSE
    Route::get('/expenses', [ExpenseController::class, 'index']);
    Route::get('/expenses/create', [ExpenseController::class, 'create']);
    Route::get('/expenses/edit/{id}', [ExpenseController::class, 'edit']);
    Route::post('/expenses/store', [ExpenseController::class, 'store']);
    Route::put('/expenses/update/{id}', [ExpenseController::class, 'update']);
    Route::delete('/expenses/{id}', [ExpenseController::class, 'delete']);

    // PURCHASE
    Route::get('/purchases', [PurchaseController::class, 'index']);
    Route::get('/purchases/create', [PurchaseController::class, 'create']);
    Route::get('/purchases/edit/{id}', [PurchaseController::class, 'edit']);
    Route::post('/purchases/store', [PurchaseController::class, 'store']);
    Route::put('/purchases/update/{id}', [PurchaseController::class, 'update']);
    Route::delete('/purchases/{id}', [PurchaseController::class, 'delete']);
});

//LOGIN
Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
