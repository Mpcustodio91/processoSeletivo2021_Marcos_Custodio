<?php

namespace Database\Seeders;

use App\Models\Specialtie;
use Illuminate\Database\Seeder;

class SpecialtieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialtie = [
            'Cirurgia e Traumatologia Buco-Maxilo-Faciais',
            'Dentística',
            'Disfunção Temporomandibular e Dor Orofacial',
            'Endodontia',
            'Estomatologia',
            'Radiologia Odontológica e Imaginologia',
            'Implantodontia',
            'Odontologia Legal',
            'Odontologia do Trabalho',
            'Odontologia para Pacientes com Necessidades Especiais',
            'Odontogeriatria',
            'Odontopediatria',
            'Ortodontia',
            'Ortopedia Funcional dos Maxilares',
            'Patologia Bucal',
            'Periodontia',
            'Prótese Buco-Maxilo-Facial',
            'Prótese Dentária',
            'Saúde Coletiva e da Família'
        ];
        foreach($specialtie as $key){
            Specialtie::create([
                'name' => $key
            ]);
        }
    }
}
