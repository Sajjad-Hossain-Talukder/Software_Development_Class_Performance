<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonControl;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us', [AboutController::class , 'about'] );
Route::get('contact/{catagory}',  [FirstController::class , 'contact']);

Route::get('/create-person', [PersonControl::class , 'create']);

Route::post('store-person',[PersonControl::class , 'store']);

Route::get('/persons', [PersonControl::class , 'all']);

Route::get('/edit-person/{id}', [PersonControl::class , 'edit']);

Route::post('/update-person/{id}', [PersonControl::class , 'update']);

Route::get('/delete-person/{id}', [PersonControl::class , 'delete']);

Route::get('login', [AuthController::class , 'login']);
Route::post('login-store', [AuthController::class , 'loginstore']);

Route::get('register', [AuthController::class , 'register']);
Route::post('store-register', [AuthController::class , 'storeregister']);

Route::get('pending-list', [AuthController::class , 'pendlist']);



Route::get('insert-category', [CategoryController::class , 'show']);
Route::post('store-category', [CategoryController::class , 'store']);


Route::get('insert-product', [CategoryController::class , 'showproduct']);
Route::post('store-product', [CategoryController::class , 'storeproduct']);


Route::get('category-list', [CategoryController::class , 'clist']);
Route::get('product-list', [CategoryController::class , 'plist']);


Route::get('dashboard',[AuthController::class , 'dashboard'])->middleware('checkloggedin');


Route::get('logout',[AuthController::class , 'logout']);

