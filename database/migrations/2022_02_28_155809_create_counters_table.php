<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('firstTitle');
            $table->string('firstNumber');
            $table->string('firstIcon');
            $table->string('secondTitle');
            $table->string('secondNumber');
            $table->string('secondIcon');
            $table->string('thirdTitle');
            $table->string('thirdNumber');
            $table->string('thirdIcon');

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
        Schema::dropIfExists('counters');
    }
}
