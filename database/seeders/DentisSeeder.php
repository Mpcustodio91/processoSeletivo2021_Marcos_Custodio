<?php

namespace Database\Seeders;

use App\Models\Dentist;
use Illuminate\Database\Seeder;

class DentisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dentist::create([
            'name'      => 'Dentista',
            'email'     => 'dentista@dentista.com',
            'cro'       => '0000',
            'cro_uf'    => 'PR'
        ]);
        Dentist::create([
            'name'      => 'Dentista1',
            'email'     => 'dentista1@dentista1.com',
            'cro'       => '1111',
            'cro_uf'    => 'PR'
        ]);
        Dentist::create([
            'name'      => 'Dentista2',
            'email'     => 'dentista2@dentista2.com',
            'cro'       => '2222',
            'cro_uf'    => 'PR'
        ]);
        Dentist::create([
            'name'      => 'Dentista3',
            'email'     => 'dentista3@dentista3.com',
            'cro'       => '3333',
            'cro_uf'    => 'PR'
        ]);
        Dentist::create([
            'name'      => 'Dentista4',
            'email'     => 'dentista4@dentista4.com',
            'cro'       => '4444',
            'cro_uf'    => 'PR'
        ]);
    }
}
