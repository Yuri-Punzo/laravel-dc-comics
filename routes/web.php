<!-- 
--CONSEGNA DAY 1--
Oggi create un nuovo progetto Laravel 9 per gestire un archivio di fumetti.

Milestone 1
Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.

Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view:
index()
show()
create()
store()

Bonus:
creare il seeder per la tabella comics utilizzando il file in allegato.
 -->
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Models\Comic;

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
    $comics = Comic::all();
    return view('welcome', compact('comics'));
})->name('comics');

Route::resource('admin/comics', ComicController::class);

/* use App\Http\Controllers\PhotoController;
 
Route::resource('photos', PhotoController::class); */