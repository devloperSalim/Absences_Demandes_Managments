<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stagiaire_id');
            $table->string('status');
            $table->string('type');
            $table->text('description');
            $table->date('date_demande');
            $table->date('date_formation');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('stagiaire_id')
                    ->references('id')
                    ->on('stagiaires')
                    ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
