<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id("id_empleado");
            $table->string("nombre");
            $table->string("apellidos");
            $table->bigInteger("edad");
            $table->string("sexo");
            $table->double("salario");
            $table->unsignedBigInteger("id_area");
            $table->string("foto");
            $table->timestamps();

            $table->foreign("id_area")->references("id_area")->on("areas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
