<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('home', [Controller::class, 'home'])->name('home');


/*************** Exam Controller ********************* */
Route::get('addexam', [Controller::class, 'addexam'])->name('addexam');
Route::get('examcategory', [Controller::class, 'examcategory'])->name('examcategory');
Route::get('examlist', [Controller::class, 'examlist'])->name('examlist');

Route::get('addquestion', [Controller::class, 'addquestion'])->name('addquestion');
Route::get('questionlist', [Controller::class, 'questionlist'])->name('questionlist');