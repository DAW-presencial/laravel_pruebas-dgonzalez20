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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique(false);
            $table->timestamp('email_verified_at')->nullable(false);
            $table->string("NombrePersona")->nullable(false);
            $table->string('password')->nullable(true);
            $table->rememberToken();
            $table->timestamps();
            $table->string("apellido")->nullable(false);
            $table->enum("Deportista, Técnico, Médico, Fisioterapeuts");
            $table->date("Fecha de inicio");
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


