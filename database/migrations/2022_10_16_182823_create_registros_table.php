<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Para la fecha
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $date = Carbon::now();
            $date = $date->format('d-m-Y');
            $table->string('imagen')->default('')->nullable();
            $table->string('nombre',50);
            $table->string('correo',50);
            $table->string('genero',20);
            $table->date('fechaNacimiento');
            $table->string('contrasena',16);
            $table->string('confirmarContrasena',16);

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
        Schema::dropIfExists('registros');
    }
};
