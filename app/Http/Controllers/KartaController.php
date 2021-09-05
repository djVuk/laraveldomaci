<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karta;

class KartaController extends Controller
{
    public function vratiSveKarte(){
        return Karta::all();
    }

    public function dodajKartu(){
        request() -> validate([
            'Utakmica' => 'required',
            'Ulaz' => 'required',
            'Red' => 'required',
            'Sediste' => 'required'
        ]);
        return Karta::create([
            'Utakmica' => request('Utakmica'),
            'Ulaz' => request('Ulaz'),
            'Red' => request('Red'),
            'Sediste' => request('Sediste')
        ]);
    }

    public function izmeniKartu(Karta $karta){
        request() -> validate([
            'Utakmica' => 'required',
            'Ulaz' => 'required',
            'Red' => 'required',
            'Sediste' => 'required'
        ]);
        
        $success = $karta -> update([
            'Utakmica' => request('Utakmica'),
            'Ulaz' => request('Ulaz'),
            'Red' => request('Red'),
            'Sediste' => request('Sediste'),
            'Sponzor' => request('Sponzor')
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function izbrisiKartu(Karta $karta){
        $success = $karta -> delete();

        return [
            'success' => $success
        ];

    }
}
