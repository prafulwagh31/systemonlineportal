<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;

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

Route::get('registerdata', [AuthController::class, 'createRegister'])->name('registerdata');
Route::post('registerdata', [AuthController::class, 'storeRegister'])->name('storeregister');

Route::get('logindata', [AuthController::class, 'createLogin'])->name('logindata');
Route::post('logindata', [AuthController::class, 'createauthenticate'])->name('storelogin');
Route::get('logoutdata', [AuthController::class, 'createlogout'])->name('logoutdata');


/*************** Exam Route ********************* */
Route::get('create-exam', [Controller::class, 'addexam'])->name('addexam');
Route::post('create-exam', [Controller::class, 'createExam'])->name('createExam');
Route::get('edit-exam/{id}', [Controller::class, 'editExam'])->name('editExam');
Route::post('update-exam/{id}', [Controller::class, 'updateExam'])->name('updateExam');
Route::get('destroy-exam/{id}', [Controller::class, 'destroyExam'])->name('destroyExam');

Route::get('exam-category', [Controller::class, 'examcategory'])->name('examcategory');
Route::post('exam-category', [Controller::class, 'addExamcategory'])->name('addExamcategory');
Route::get('edit-category/{id}', [Controller::class, 'editCategory'])->name('editCategory');
Route::post('update-category/{id}', [Controller::class, 'updateCategory'])->name('updateCategory');
Route::get('destroy-category/{id}', [Controller::class, 'destroyCategory'])->name('destroyCategory');

Route::get('categorylist', [Controller::class, 'categorylist'])->name('categorylist');
Route::get('examlist', [Controller::class, 'examlist'])->name('examlist');

Route::get('create-question', [Controller::class, 'addquestion'])->name('addquestion');
Route::post('create-question', [Controller::class, 'createQuestion'])->name('createQuestion');
Route::get('questionlist', [Controller::class, 'questionlist'])->name('questionlist');


Route::get('websitesetting', [Controller::class, 'websitesetting'])->name('websitesetting');
Route::get('pagesetting', [Controller::class, 'pagesetting'])->name('pagesetting');
Route::get('socialsetting', [Controller::class, 'socialsetting'])->name('socialsetting');


Route::get('profile', [Controller::class, 'profile'])->name('profile');






/********************************************* Frontwebsite Route *************************************/

Route::get('/', [FrontController::class, 'createHome'])->name('index');

Route::get('register', [RegisterController::class, 'createRegister'])->name('register');
Route::post('register', [RegisterController::class, 'storeRegister'])->name('store');

Route::get('login', [LoginController::class, 'createLogin'])->name('login');
Route::post('login', [LoginController::class, 'createauthenticate'])->name('login');
Route::get('logout', [LoginController::class, 'createlogout'])->name('logout');