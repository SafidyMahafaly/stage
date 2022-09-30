<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\FicheController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TypeController;

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

Route::group(['middleware' => ['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});

//pour l'admin
Route::group(['middleware' => ['auth','admin']],function(){
    Route::resource('/departement',DepartementController::class);
    Route::get('/DeleteDepartement/{id}',[DepartementController::class,'destroy'])->name('delete');
    Route::get('/detail_departement/{id}',[DepartementController::class,'detail'])->name('detail');
    Route::post('/employerC',[EmployerController::class,'store'])->name('employer.gor');
    Route::get('/change',[EmployerController::class,'change'])->name('change');
    Route::get('/changeD',[EmployerController::class,'del'])->name('del');
    Route::resource('/type',TypeController::class);
});

//pour les chef de departement
Route::group(['middleware' => ['auth','chef']],function(){
    Route::get('equipe',[EmployerController::class,'equipe'])->name('equipe');
    Route::resource('/employer',EmployerController::class);
    Route::get('/ficheEquipe/{id}',[EmployerController::class,'fiche'])->name('equipe.fiche');
    Route::get('/ficheC',[FicheController::class,'chef'])->name('fiche.chef');
    Route::post('/fichestrC',[FicheController::class,'storeC'])->name('fiche.storeC');
    Route::post('/situationC',[FicheController::class,'situation'])->name('fiche.situationC');
    Route::post('/affectationC',[FicheController::class,'affectation'])->name('fiche.affectationC');
    Route::post('/affectationMulC',[FicheController::class,'affectationmultiple'])->name('fiche.affectationmultipleC');
    Route::post('/diplomeC',[FicheController::class,'diplome'])->name('fiche.diplomeC');
    Route::post('/stageC',[FicheController::class,'stage'])->name('fiche.stageC');
    Route::post('/gradeC',[FicheController::class,'grade'])->name('fiche.gradeC');
    Route::post('/civileC',[FicheController::class,'civile'])->name('fiche.civileC');
    Route::post('/enfantC',[FicheController::class,'enfant'])->name('fiche.enfantC');
});

Route::group(['middleware' => ['auth','employer']],function(){
    Route::resource('/fiche',FicheController::class);
    Route::post('/situation',[FicheController::class,'situation'])->name('fiche.situation');
    Route::post('/affectation',[FicheController::class,'affectation'])->name('fiche.affectation');
    Route::post('/affectationMul',[FicheController::class,'affectationmultiple'])->name('fiche.affectationmultiple');
    Route::post('/diplome',[FicheController::class,'diplome'])->name('fiche.diplome');
    Route::post('/stage',[FicheController::class,'stage'])->name('fiche.stage');
    Route::post('/grade',[FicheController::class,'grade'])->name('fiche.grade');
    Route::post('/civile',[FicheController::class,'civile'])->name('fiche.civile');
    Route::post('/enfant',[FicheController::class,'enfant'])->name('fiche.enfant');

});

Route::group(['middleware' => ['auth','role:employer']],function(){
    Route::get('/dashboard/myprofile',[DashboardController::class,'profil'])->name('dashboard.myprofil');
});
Route::group(['middleware' => ['auth','role:admin']],function(){
    // Route::get('/dashboard/myprofile',[DashboardController::class,'profil'])->name('dashboard.myprofil');
    // Route::resource('/departement',DepartementController::class);
});

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::resource('/etudiant',StudentController::class);

Route::get('test', function(){
    return view('layouts.admin');
});

require __DIR__.'/auth.php';
