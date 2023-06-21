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
        Schema::create('kats', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('price');
            $table->string('diagon');
            $table->string('razr');
            $table->string('matr');
            $table->string('chast');
            $table->string('id_bran');
            $table->string('tip');
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
        Schema::dropIfExists('kats');
    }
};
