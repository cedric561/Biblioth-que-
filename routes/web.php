<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


Route::middleware(['auth','role:admin'])->prefix('admin')->group(function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/etudiants',[AdminController::class,'etudiants'])->name('admin.etudiants');
    Route::get('/professeurs',[AdminController::class,'professeurs'])->name('admin.professeurs');
    Route::get('/notes',[AdminController::class,'notes'])->name('admin.notes');
    Route::get('/create-etudiant',[AdminController::class,'createEtudiant'])->name('admin.createEtudiant');
    Route::get('/create-professeur',[AdminController::class,'createProfesseur'])->name('admin.createProfesseur');
    Route::get('/create-note',[AdminController::class,'createNote'])->name('admin.createNote');
    Route::post('/store-etudiant',[AdminController::class,'storeEtudiant'])->name('admin.storeEtudiant');
    Route::post('/store-professeur',[AdminController::class,'storeProfesseur'])->name('admin.storeProfesseur');
    Route::post('/store-note',[AdminController::class,'storeNote'])->name('admin.storeNote');
});


Route::middleware(['auth','role:professeur'])->prefix('professeur')->group(function(){
    Route::get('/dashboard',[ProfesseurController::class,'dashboard'])->name('professeur.dashboard');
    Route::get('/notes',[ProfesseurController::class,'notes'])->name('professeur.notes');
    Route::delete('/notes/{id}',[ProfesseurController::class,'deletenotes'])->name('professeur.delete');

});


Route::middleware(['auth','role:etudiant'])->prefix('etudiant')->group(function(){
    Route::get('/dashboard',[EtudiantController::class,'dashboard'])->name('etudiant.dashboard');
    Route::get('/notes',[EtudiantController::class,'notes'])->name('etudiant.notes');
});
