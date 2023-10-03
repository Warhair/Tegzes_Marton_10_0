<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;
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
Route::get('/api/tasks', [AgencyController::class, 'index']);
Route::get('/api/tasks/{id}', [AgencyController::class, 'show']);
/* GET  -1  /api/task/1 */
Route::get('/api/tasks/{id}', [AgencyController::class,'show']);
/* POST     /api/task */
Route::post('/api/tasks', [AgencyController::class,'store']);
/* PUT      /api/task/1 */
Route::put('/api/tasks/{id}', [AgencyController::class,'update']);
/* DELETE       /api/task/1 */
Route::delete('/api/tasks/{id}', [AgencyController::class,'destroy']);
Route::get('/task/list', [AgencyController::class, 'listView']);
Route::get('/task/new', [AgencyController::class, 'newView']);
/* Task módosítása      /task/edit/1 */
Route::get('/task/edit/{id}', [AgencyController::class, 'editView']);
