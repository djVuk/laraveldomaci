<?php


use App\Http\Controllers\KartaController;
use App\Models\Rezervacija;
use App\Http\Controllers\RezervacijaController;
use App\Models\Karta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/kartas', [KartaController::class, 'vratiSveKarte']);

Route::post('/kartas', [KartaController::class, 'dodajKartu']);

Route::put('/kartas/{karta}', [KartaController::class, 'izmeniKartu']);

Route::delete('/kartas/{karta}', [KartaController::class, 'izbrisiKartu']);

Route::get('/rezervacijas', [RezervacijaController::class, 'vratiSveRezervacije']);

Route::post('/rezervacijas', [RezervacijaController::class, 'dodajRezervaciju']);

