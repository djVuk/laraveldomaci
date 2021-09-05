<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rezervacija;

class RezervacijaController extends Controller
{
    public function vratiSveRezervacije(){
        $data = Rezervacija::join('kartas', 'kartas.id','=','rezervacijas.Karta')
                        ->get(['rezervacijas.Ime','rezervacijas.Prezime','kartas.Utakmica']);
        
        return $data;
    }

    public function dodajRezervaciju(){
        request() -> validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Karta' => 'required'
        ]);
        return Rezervacija::create([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Karta' => intval(request('Karta'))
        ]);
    }
}
