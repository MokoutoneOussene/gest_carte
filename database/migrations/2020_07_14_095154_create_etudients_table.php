<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Niveau_id');
            $table->unsignedBigInteger('Filliere_id');
            $table->unsignedBigInteger('Nationalite_id');
            $table->unsignedBigInteger('Ufr_id');

            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naiss');
            $table->string('lieu_naiss');
            $table->string('sexe');
            $table->string('email');
            $table->string('photo');
            $table->integer('telephone');
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
        Schema::dropIfExists('etudients');
    }
}
