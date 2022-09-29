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
        Schema::create('enfant', function (Blueprint $table) {
            $table->id();
            $table->integer('employer_id');
            $table->integer('departement_id');
            $table->integer('type_id');
            $table->string('nom');
            $table->string('date');
            $table->string('lieu');
            $table->string('sexe');
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
        Schema::dropIfExists('enfant');
    }
};
