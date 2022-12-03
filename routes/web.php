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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [RoleController::class , 'create']);

// phần nào liên quan đến admin thì viết vào đây
Route::middleware(['role'])->group(function () {
    Route::get('/admin', function () {
        return view('phucLong.coffe');
    });
 
    
});