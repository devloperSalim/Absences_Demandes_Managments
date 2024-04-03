<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            // $table->string('registration_number');
            $table->string('password')->default(Hash::make('password'));
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->string('email_etu',90)->default('ofppt@ofppt-edu.ma');
            $table->boolean('stagaire_en_formation');
            $table->string('nationalite');
            $table->string('date_pv')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('code_group');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('code_group')->references('code_group')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stagiaires');
    }
};
