<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\SanPhamController;
use App\Models\SanPham;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('phucLong.index');
});
Route::get('/coffe', function () {
    return view('phucLong.coffe');
});
Route::get('/product', [SanPhamController::class , 'index']);


Route::get('/login', [RoleController::class , 'index']);
Route::post('/login', [RoleController::class , 'login_account']);
Route::get('/create-login', [RoleController::class , 'index_cr_login']);
Route::post('/create-login', [RoleController::class , 'create_account']);


// phần nào liên quan đến admin thì viết vào đây
Route::middleware(['role'])->group(function () {
    Route::get('/admin', [SanPhamController::class,'indexAdmin']);
    
    
    
    Route::get('/admin/lish-role' , [RoleController::class , 'lish_role']);


    Route::get('/admin/create-product', [SanPhamController::class,'create']);
    Route::post('/admin/create-product', [SanPhamController::class,'store']);
    Route::get('/admin/edit-product/{id}', [SanPhamController::class,'edit']);
    Route::put('/admin/edit-product/{id}', [SanPhamController::class,'update']);
    Route::post('/admin/delete-product/{id}', [SanPhamController::class,'destroy']);
 
    
});