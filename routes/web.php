<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TacticsController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\Player\PlayerController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Coach\CoachController;

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

/* Authentication Routes */
Route::get('login', 'AuthController@loginPage');
Route::get('admin', 'AuthController@adminLoginPage');
Route::get('register', 'AuthController@registerPage');
Route::get('logout', 'AuthController@logout');

Route::post('login', 'AuthController@login');
Route::post('admin', 'AuthController@admin');
Route::post('register', 'AuthController@register');

/* Index Route */
Route::get('/', [PagesController::class, 'index'] );
Route::get('/home', [PagesController::class, 'dash'] );


/* Pages Routes */
Route::middleware(['isLoggedIn', 'isCoach'])->group(function () {

    

});

Route::middleware(['isLoggedIn', 'isPlayer'])->group(function () {

    Route::get('/training', [PagesController::class, 'training'] );
    Route::get('/skills', [PagesController::class, 'skills'] );

});

Route::middleware(['isLoggedIn'])->group(function () {

    Route::get('/gallery', [PagesController::class, 'gallery'] );
    Route::get('/docs', [PagesController::class, 'documentary'] );    
    Route::get('/prediction',[PagesController::class,'prediction'])->name('prediction');
    Route::get('/bet',[PagesController::class,'bet'])->name('bet');
    Route::get('/stream',[PagesController::class,'stream'])->name('stream');
    Route::get('/odd',[PagesController::class,'odd'])->name('odd');
    Route::get('/contact', [PagesController::class, 'contact'] );
    Route::get('/showboat', [PagesController::class, 'showboat'] );
    Route::get('/tactics', [PagesController::class, 'tactics'] );
    Route::post('/tactics/{id}', [PagesController::class, 'tactic']);

   

    Route::get('/training-drill-1', [TrainingController::class, 'tdrill1'] );
    Route::get('/training-drill-2', [TrainingController::class, 'tdrill2'] );
    Route::get('/training-drill-3', [TrainingController::class, 'tdrill3'] );
    Route::get('/training-drill-4', [TrainingController::class, 'tdrill4'] );
    Route::get('/training-drill-5', [TrainingController::class, 'tdrill5'] );
    Route::get('/training-drill-6', [TrainingController::class, 'tdrill6'] ); 
    
    Route::get('/tactic-352', [TacticsController::class, 'tactics352'] );
    Route::get('/tactic-343', [TacticsController::class, 'tactics343'] );
    Route::get('/tactic-442', [TacticsController::class, 'tactics442'] );
    Route::get('/tactic-433', [TacticsController::class, 'tactics433'] );
    Route::get('/tactic-451', [TacticsController::class, 'tactics451'] );
    Route::get('/tactic-4411', [TacticsController::class, 'tactics4411'] );
    Route::get('/tactic-442D', [TacticsController::class, 'tactics442D'] );
    Route::get('/tactic-4141', [TacticsController::class, 'tactics4141'] );
    Route::get('/tactic-4231', [TacticsController::class, 'tactics4231'] ); 
    
});

/** Admin Routes */
Route::middleware(['isLoggedIn', 'isAdmin'])->group(function () {

    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('admin/tactics', 'TacticsController@tactics');

    Route::post('admin/tactics/new', 'TacticsController@newTactic');
    Route::post('/delete_tactic/{id}', 'TacticsController@deleteTactic');

});