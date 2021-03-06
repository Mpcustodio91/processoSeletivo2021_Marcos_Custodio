<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialties', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->timestamps();
        });

        Schema::create('dentists_specialties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dentist_id')->constrained('dentists');
            $table->foreignId('specialtie_id')->constrained('specialties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentists_specialties');
        Schema::dropIfExists('specialties');
    }
}
