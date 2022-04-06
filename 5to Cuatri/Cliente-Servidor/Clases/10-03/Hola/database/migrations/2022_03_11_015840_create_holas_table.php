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
        Schema::create('holas', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo');
            $table->string('Asentamiento');
            $table->string('Tipo');
            $table->string('Municipio');
            $table->string('Estado');
            $table->string('Ciudad');
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
        Schema::dropIfExists('holas');
    }
};
