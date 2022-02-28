<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodyElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_elements', function (Blueprint $table) {
            $table->id();
            $table->string('purpleTitle');
            $table->string('title');
            $table->string('subtitle');
            $table->string('elem1title');
            $table->string('elem1subtitle');
            $table->string('elem1body');
            $table->string('elem1picture');
            $table->string('elem2title');
            $table->string('elem2subtitle');
            $table->string('elem2body');
            $table->string('elem2picture');
            $table->string('elem3title');
            $table->string('elem3subtitle');
            $table->string('elem3body');
            $table->string('elem3picture');
            $table->string('elem4title');
            $table->string('elem4subtitle');
            $table->string('elem4body');
            $table->string('elem4picture');
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
        Schema::dropIfExists('body_elements');
    }
}
