<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karta extends Model
{
    use HasFactory;
    protected $fillable = [
        'Utakmica', 'Ulaz', 'Red', 'Sediste'
    ];
}
