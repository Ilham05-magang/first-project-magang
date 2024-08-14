<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerSiswa;

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

Route::get('/', [ControllerSiswa::class, 'index'])->name('siswas.index');

Route::post('/tambah-data', [ControllerSiswa::class, 'create'])->name('siswas.create');

Route::put('/edit-data/{id}', [ControllerSiswa::class, 'update'])->name('siswas.update');

Route::delete('/delete-data/{id}', [ControllerSiswa::class, 'delete'])->name('siswas.delete');

Route::get('/data-siswas/search', [ControllerSiswa::class, 'search'])->name('siswas.search');
