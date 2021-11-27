<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\cobacontroller;
use App\Models\Friends;
use App\Models\Groups;

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

Route::get('', [App\Http\Controllers\cobacontroller::class, 'index']);
//Route::get('/friends', [App\Http\Controllers\cobacontroller::class, 'index']);
//Route::get('/friends/create', [App\Http\Controllers\cobacontroller::class, 'create']);
//Route::post('/friends', [App\Http\Controllers\cobacontroller::class, 'store']);
//Route::get('/friends/{id}', [App\Http\Controllers\cobacontroller::class, 'show']);
//Route::get('/friends/{id}/edit', [App\Http\Controllers\cobacontroller::class, 'edit']);
//Route::put('/friends/{id}', [App\Http\Controllers\cobacontroller::class, 'update']);
//Route::delete('/friends/{id}', [App\Http\Controllers\cobacontroller::class, 'destroy']);
Route::get('/friends/{id}/detail', [App\Http\Controllers\cobacontroller::class, 'detail']);

Route::resources([
    'friends' => App\Http\Controllers\cobacontroller::class,
    'groups' => App\Http\Controllers\GroupsController::class,
]);

Route::get('/groups/addmember/{group}', [App\Http\Controllers\GroupsController::class, 'addmember']);
Route::put('/groups/addmember/{group}', [App\Http\Controllers\GroupsController::class, 'updateaddmember']);
Route::put('/groups/deleteaddmember/{group}', [App\Http\Controllers\GroupsController::class, 'deleteaddmember']);