<?php

use App\Http\Controllers\SupportTaskController;
use App\Models\SupportTask;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/support_task', [SupportTaskController::class, 'index']);
Route::get('/support_task/create', [SupportTaskController::class, 'create']);

