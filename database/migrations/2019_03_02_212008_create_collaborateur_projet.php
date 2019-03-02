<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborateurProjet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateur_projet', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('projet_id');
            $table->foreign('projet_id')->references('id')->on('projets');
            $table->unsignedInteger('collaborateur_id');
            $table->foreign('collaborateur_id')->references('id')->on('collaborateurs');
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
        Schema::dropIfExists('collaborateur_projet');
    }
}
