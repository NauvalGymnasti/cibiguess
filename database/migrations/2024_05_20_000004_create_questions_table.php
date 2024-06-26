<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buildingId')->constrained('mini_maps')->onDelete('cascade');
            $table->string('difficulty');
            // $table->string('building');
            $table->string('spotImage');
            // $table->string('mapImage');
            $table->decimal('answerX', 8, 2);
            $table->decimal('answerY', 8, 2);
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
        Schema::dropIfExists('questions');
    }
}
