<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsernameController;
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

//récupère la route depuis le Controller et passe en paramètre la fonction qui appel la vue
Route::get('/', [UsernameController::class, 'index'])->name('welcome');

//Cherche la vue "userParameter" dans le controller et passe par la fonction  "ModifyUsername", le "whereNumber" vérifie si le paramètre est bien un "id"
Route::get('/userParameter/{id}', [UsernameController::class, 'modifyUsername'])->name('teacher.id');

Route::get('/login', [UsernameController::class, 'login'])->name('login');
