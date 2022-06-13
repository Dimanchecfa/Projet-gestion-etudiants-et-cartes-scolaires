<?php

use App\Http\Livewire\Etudiants;
use App\Http\Livewire\Gestions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\DirecteurMiddleware;

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

 Route::get('/', function () {
    return view('auth.login');
 });

//  Route::get('/admin', function () {
//     return view('layouts.master');
//  });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::get("/secretaires",Gestions::class)->name("secretaires.index")->middleware('auth');
  Route::get("/etudiants",Etudiants::class)->name("etudiants.index")->middleware('auth');


// Route::group([
//     //ici 2 middlewire est utiliser pour securiser les routes
//     //le premier cest pour verifier l'authentification(auth)
//     //le deuxieme c'est pour verifier si l'utilisateur est admin

//     "middleware" => ["auth", "auth.directeur"], 


//     "as" => "directeur."],
//     function(){
//         Route::group([
//             "prefix" => "gestion",
//             "as"=>"gestion.",
//        ],
//        function(){
//            Route::get("/secretaires",Gestions::class)->name("secretaires.index");
//            //ceci a pour chemin (admin.habilitations.users.index)
//            //ceci a pour chemin (directeur.gestion.secretaires.index)
         
//        });

//     }
// );