<?php

use App\Http\Controllers\taskscontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/create',[taskscontroller::class,'create']);
route::get('/create-data', [taskscontroller::class, 'store']);
route::get('/',[taskscontroller::class,'show']);
Route::get('/exit/{id}', [taskscontroller::class, 'exit'])->name('tasks.exit');
route::get('/index',[taskscontroller::class,'index']);
route::get('/history',[taskscontroller::class,'history']);

