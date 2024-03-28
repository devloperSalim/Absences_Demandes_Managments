<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->string('password');
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->string('email_etu',90);
            $table->boolean('stagaire_en_formation');
            $table->string('nationalite');
            $table->date('date_pv')->nullable();
            $table->boolean('isStagiaire')->default(true);
            $table->softDeletes();
            $table->timestamps();

              $table->foreignId('group_id')->constrained()->onDelete('cascade');
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
