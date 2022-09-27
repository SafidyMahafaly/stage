<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etat_civil', function (Blueprint $table) {
            $table->id();
            $table->integer('employer_id');
            $table->integer('departement_id');
            $table->integer('type_id');
            $table->string('Noms');
            $table->string('Prenoms');
            $table->string('Matricule');
            $table->string('DateNaiss');
            $table->string('Lieu');
            $table->string('CIN');
            $table->string('DateCIN');
            $table->string('Duplicata');
            $table->string('Pere');
            $table->string('Mere');
            $table->string('Adresse');
            $table->string('Telephone');
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
        Schema::dropIfExists('etat_civil');
    }
};
