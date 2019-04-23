<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('TipoDocumentoInstr');
            $table->string('id')->primary()->unique();
            $table->string('NombresInstr');
            $table->string('ApellidosInstr');
            $table->date('FechaNacimientoInstr');
            $table->string('CiudadResidenciaInstr');
            $table->string('DireccionResidenciaInstr');
            $table->string('NoCelularInstr');
            $table->string('CentroFormacionInstr');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
