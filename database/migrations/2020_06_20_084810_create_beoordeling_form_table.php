<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeoordelingFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beoordeling_form', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam');
            $table->string('cursus');
            $table->string('geslacht');
            $table->string('beoordeling');
            $table->integer('leeftijd');
            $table->text('suggestie');
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
        Schema::dropIfExists('beoordeling_form');
    }
}
