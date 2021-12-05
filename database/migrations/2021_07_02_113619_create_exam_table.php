<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('category');
            $table->string('agegroup');
            $table->string('language');
            $table->string('duration');
            $table->string('noquestion');
            $table->string('passmarks');
            $table->string('status');
            $table->string('type');
            $table->string('cost');
            $table->date('fromdate');
            $table->date('todate');
            $table->string('instruction');
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
        Schema::dropIfExists('exam');
    }
}
