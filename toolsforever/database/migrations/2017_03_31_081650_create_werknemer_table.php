<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWerknemerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('werknemers', function (Blueprint $table){
            $table->increments('id');
            $table->string('naam');
            $table->string('tussenvoegsel')->nullable();
            $table->string('achternaam');
            $table->string('email');
            $table->string('wachtwoord');
            $table->string('organisatienaam');
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
        Schema::drop('werknemers');
    }
}
