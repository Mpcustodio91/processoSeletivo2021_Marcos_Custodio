<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','cro','cro_uf'];

    public function specialtie()
    {
        return $this->belongsToMany(Specialtie::class,'dentists_specialties','dentist_id','specialtie_id');
    }
}
