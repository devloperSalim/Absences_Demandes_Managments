
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stagiaire_id');
            $table->dateTime('fromDate');
            $table->dateTime('toDate');
            $table->string('type_abs');
            $table->integer('nbr_seance');
            $table->integer('nbr_hour');
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
        Schema::dropIfExists('absences');
    }
}
