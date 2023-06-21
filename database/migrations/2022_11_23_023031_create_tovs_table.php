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
        Schema::create('tovs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('model');
            $table->string('price');
            $table->string('nazv_id');
            $table->string('tip');
            $table->string('interf');
            $table->string('opis');
            $table->string('garant');
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
        Schema::dropIfExists('tovs');
    }
};
