<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use App\Models\Curso;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

//Multiples parametros y opcionales
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "bienvenido $curso de $categoria";
//     }else{
//         return "Bienbenidi al curso $curso";
//     }
// });

Route::resource('cursos', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::view('nosotros','nosotros')->name('nosotros');

Route::get('contactanos', function(){
    $correo = new ContactanosMailable();
    Mail::to('denisgilsil.21@gmail.com')->send($correo);
    return 'Mensaje enviado';
});