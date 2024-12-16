<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("homepage");

//Route::get('/teams', function () {
    //return view('home');
//})->name("teams");

Route::get('/wedstrijdschema', function () {
    return view('home');
})->name("wedstrijdschema");

Route::get('/schemapage', function () {
    return view('home');
})->name("schemapage");

Route::get('/generationpage', function () {
    return view('home');
})->name("generationpage");

Route::get('/scorespage', function () {
    return view('home');
})->name("scorespage");

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/teams',[TeamsController::class, "index"])->name("teams.index");
Route::get('/teams/create', [TeamsController::class, 'create'])->name('teams.create');
Route::post('/teams/create', [TeamsController::class, 'store'])->name('teams.store');
Route::get('/teams/edit/{team}', [TeamsController::class, 'edit'])->name('teams.edit');
Route::post('/teams/edit/{team}', [TeamsController::class, 'update'])->name('teams.update');
Route::delete('/teams/delete/{team}', [TeamsController::class, 'destroy'])->name('teams.destroy');


require __DIR__.'/auth.php';
