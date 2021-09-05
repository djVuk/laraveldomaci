<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KartaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kartas')->insert([
            'Utakmica'=>'Inter - Radnički' ,           
            'Ulaz'=>'Ulaz C',
            'Red'=>'4',
            'Sediste'=>'32',
            'Sponzor'=>'Tigar'
        ]);
    }
}
