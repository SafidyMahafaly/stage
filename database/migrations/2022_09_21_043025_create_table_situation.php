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
        Schema::create('situation', function (Blueprint $table) {
            $table->id();
            $table->integer('employer_id');
            $table->integer('departement_id');
            $table->integer('type_id');
            $table->string('DateEntre');
            $table->string('Corps');
            $table->string('DateCorps');
            $table->string('Grade');
            $table->string('DateGrade');
            $table->string('Programme');
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
        Schema::dropIfExists('table_situation');
    }
};
