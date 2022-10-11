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
        Schema::create('affectation', function (Blueprint $table) {
            $table->id();
            $table->integer('employer_id');
            $table->integer('departement_id');
            $table->integer('type_id');
            $table->string('direction');
            $table->string('dateEntre')->nullable();
            $table->string('service');
            $table->string('fonction');
            $table->string('actuelle')->nullable();
            $table->string('debut')->nullable();
            $table->string('fin')->nullable();
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
        Schema::dropIfExists('affectation');
    }
};
