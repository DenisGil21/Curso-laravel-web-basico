<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Curso;

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

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');
Route::put('cursos/{curso}', [CursoController::class,'update'])->name('cursos.update');
Route::delete('cursos/{curso}', [CursoController::class,'destroy'])->name('cursos.destroy');
//Multiples parametros y opcionales
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "bienvenido $curso de $categoria";
//     }else{
//         return "Bienbenidi al curso $curso";
//     }
// });
