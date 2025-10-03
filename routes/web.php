<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminClubController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Routes publiques
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubs/{club}', [ClubController::class, 'show'])->name('clubs.show');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

// Formations routes
Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/formations/{formation}', [FormationController::class, 'show'])->name('formations.show');

// Actualités routes
Route::get('/actualites', [NewsController::class, 'index'])->name('actualites.index');
Route::get('/actualites/{news}', [NewsController::class, 'show'])->name('actualites.show');

// Événements routes
Route::get('/evenements', [EventController::class, 'index'])->name('evenements.index');
Route::get('/evenements/{event}', [EventController::class, 'show'])->name('evenements.show');

// Clubs routes
Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubs/{club}', [ClubController::class, 'show'])->name('clubs.show');

// Routes d'authentification
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Clubs actions
    Route::post('/clubs/{club}/join', [ClubController::class, 'join'])->name('clubs.join');
    Route::post('/clubs/{club}/leave', [ClubController::class, 'leave'])->name('clubs.leave');

    // Événements actions
    Route::post('/events/{event}/participate', [EventController::class, 'participate'])->name('events.participate');
    Route::post('/events/{event}/cancel', [EventController::class, 'cancel'])->name('events.cancel');

    // Routes pour les étudiants
    Route::middleware(['auth', \App\Http\Middleware\RoleMiddleware::class.':student'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/my-clubs', [ClubController::class, 'myClubs'])->name('clubs.my');
        Route::get('/my-events', [EventController::class, 'myEvents'])->name('events.my');
    });
});

// Routes pour les administrateurs
Route::middleware(['auth', \App\Http\Middleware\RoleMiddleware::class.':admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('dashboard');
    
    // Gestion des utilisateurs
    Route::resource('users', AdminUserController::class);
    
    // Gestion des clubs
    Route::resource('clubs', \App\Http\Controllers\Admin\ClubController::class);
    
    // Gestion des événements
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
    
    // Gestion des actualités
    Route::resource('news', \App\Http\Controllers\Admin\NewsController::class);

    Route::get('/profile', [AdminUserController::class, 'profile'])->name('profile');
    Route::post('/profile', [AdminUserController::class, 'updateProfile'])->name('profile.update');
});

// Legal routes
Route::get('/mentions-legales', function () {
    return view('pages.mentions-legales');
})->name('mentions-legales');

Route::get('/politique-confidentialite', function () {
    return view('pages.politique-confidentialite');
})->name('politique-confidentialite');

// Component routes
Route::get('/components/{component}', function ($component) {
    return view("components.{$component}");
});

Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');
