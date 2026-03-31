<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\EtudiantController;

Route::get('/', fn() => redirect()->route('login'));

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware(['auth','role:admin'])->prefix('admin')->group(function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/professeurs',[AdminController::class,'professeurs'])->name('admin.professeurs');
    Route::get('/create-professeur',[AdminController::class,'createProfesseur'])->name('admin.createProfesseur');
    Route::post('/store-professeur',[AdminController::class,'storeProfesseur'])->name('admin.storeProfesseur');

    Route::get('/admin/professeurs/{id}/edit', [AdminController::class, 'editProfesseur'])->name('admin.editProfesseur');
    Route::put('/admin/professeurs/{id}', [AdminController::class, 'updateProfesseur'])->name('admin.updateProfesseur');
    Route::delete('/admin/professeurs/{id}', [AdminController::class, 'deleteProfesseur'])->name('admin.deleteProfesseur');

    Route::get('/register',[AuthController::class,'showRegister'])->name('register');
    Route::post('/register',[AuthController::class,'register']);

    Route::get('/etudiants',[AdminController::class,'etudiants'])->name('admin.etudiants');
    Route::get('/create-etudiant',[AdminController::class,'createEtudiant'])->name('admin.createEtudiant');
    Route::post('/store-etudiant',[AdminController::class,'storeEtudiant'])->name('admin.storeEtudiant');

    Route::get('/notes',[AdminController::class,'notes'])->name('admin.notes');

});

Route::middleware(['auth','role:professeur'])->prefix('professeur')->group(function(){
    Route::get('/dashboard',[ProfesseurController::class,'dashboard'])->name('professeur.dashboard');
    Route::get('/notes',[ProfesseurController::class,'notes'])->name('professeur.notes');
    Route::get('/create-note',[ProfesseurController::class,'createNote'])->name('professeur.createNote');
    Route::post('/store-note',[ProfesseurController::class,'storeNote'])->name('professeur.storeNote');
    Route::get('/notes/{id}/edit',[ProfesseurController::class,'editNote'])->name('professeur.editNote');
    Route::put('/notes/{id}',[ProfesseurController::class,'updateNote'])->name('professeur.updateNote');
    Route::delete('/notes/{id}',[ProfesseurController::class,'deleteNote'])->name('professeur.deleteNote');
});

Route::middleware(['auth','role:etudiant'])->prefix('etudiant')->group(function(){
    Route::get('/dashboard',[EtudiantController::class,'dashboard'])->name('etudiant.dashboard');
    Route::get('/notes',[EtudiantController::class,'notes'])->name('etudiant.notes');
});
