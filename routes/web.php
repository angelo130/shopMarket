<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyMainController;

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


Route::get('/', [MyMainController::class, 'index'])->name('index');
Route::get('/about', [MyMainController::class, 'about'])->name('about');
Route::get('/produit/chaussure', [MyMainController::class, 'chaussure'])->name('chaussure');
Route::get('/produit/electronique', [MyMainController::class, 'electronique'])->name('electronique');
Route::get('/produit/vetement', [MyMainController::class, 'vetement'])->name('vetement');
Route::post('/contact', [MyMainController::class, 'contact'])->name('contact');
Route::get('/produit/montre', [MyMainController::class, 'montre'])->name('montre');
Route::get('/why', [MyMainController::class, 'why'])->name('why');
Route::get('/annaajouterprdt', [MyMainController::class, 'annaajouterprdt'])->name('annaajouterprdt');
Route::post('/annaajouterprdt', [MyMainController::class, 'annaajouterprdtpost'])->name('annaajouterprdtpost');
Route::get('/getProductPrice/{name}', [MyMainController::class, 'getProductPrice'])->name('getProductPrice');
Route::get('/payement', [MyMainController::class, 'payement'])->name('payement');