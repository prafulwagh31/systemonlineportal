<?php

use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;

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

Route::get('home', [Controller::class, 'home','middleware' => 'auth'])->name('home');

Route::get('registerdata', [AuthController::class, 'createRegister'])->name('registerdata');
Route::post('registerdata', [AuthController::class, 'storeRegister'])->name('storeregister');

Route::get('export', [Controller::class, 'export'])->name('export');



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
Route::get('set-answer/{id}', [Controller::class, 'showQuestion'])->name('showQuestion');
Route::post('set-answer', [Controller::class, 'setAnswer'])->name('setAnswer');



Route::get('websitesetting', [Controller::class, 'websitesetting'])->name('websitesetting');
Route::get('pagesetting', [Controller::class, 'pagesetting'])->name('pagesetting');
Route::get('socialsetting', [Controller::class, 'socialsetting'])->name('socialsetting');
Route::get('user-list', [Controller::class, 'userList'])->name('userList');
Route::post('/search', [Controller::class, 'searchUser']);




/********************************************* Frontwebsite Route *************************************/

Route::get('/', [FrontController::class, 'createHome'])->name('index');
Route::get('aboutus', [FrontController::class, 'createAbout'])->name('aboutus');
Route::get('termcondition', [FrontController::class, 'termCondition'])->name('termcondition');
Route::get('faq', [FrontController::class, 'createFaq'])->name('faq');

Route::get('register', [RegisterController::class, 'createRegister'])->name('register');
Route::post('register', [RegisterController::class, 'storeRegister'])->name('store');

// Route::get('login', [LoginController::class, 'createLogin'])->name('login');
// Route::post('login', [LoginController::class, 'createauthenticate'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::get('updateNumber', [ExamController::class, 'updateNumber'])->name('updateNumber');

Route::get('/login', [LoginController::class, 'login'])
    ->name('user.login');
Route::post('/login', [LoginController::class, 'handleLogin'])
    ->name('user.handleLogin');
Route::get('/logout', [LoginController::class, 'logout'])
    ->name('user.logout');



Route::get('admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'handleLogin'])
    ->name('admin.handleLogin');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


    // Route::get('/', [UserAuthController::class, 'index'])
    // ->name('user.home')
    // ->middleware('auth:web');

Route::get('admin/', [AdminAuthController::class, 'index'])
    ->name('admin.home')
    ->middleware('auth:webadmin');

Route::group(['middleware' => ['auth']], function () {
    Route::get('profile', [Controller::class, 'profile'])->name('profile');
    Route::get('exam/{id}', [ExamController::class, 'exam'])->name('exam');
    Route::post('question/{id}', [ExamController::class, 'show'])->name('question');
    Route::get('user', [ExamController::class, 'user'])->name('user');
    Route::get('profile', [ExamController::class, 'profile'])->name('profile');
    Route::get('instruction', [ExamController::class, 'instruction'])->name('instruction');
    Route::get('final-answer', [ExamController::class, 'examFinal'])->name('examFinal');
    Route::post('final', [ExamController::class, 'final'])->name('final');
    Route::get('user-logout', [ExamController::class, 'userLogout'])->name('userLogout');


});
