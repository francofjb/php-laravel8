<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // crea la tabla users con los siguientes campos
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Integer Unsigned Increment
            $table->string('name'); // varchar
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // por si se activa la opcion de verificar correo electronico
            $table->string('password');
            //$table->string('avatar');
            $table->rememberToken();// se almacena un token y se inicia cada vez que el usario marca mantener iniciada la sesion
            $table->timestamps(); //create_at:la fecha y la hora de creacion del registro - update_at: fecha y hora de actualizacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // si existe elimina la tabla users
    {
        Schema::dropIfExists('users');
    }
}
