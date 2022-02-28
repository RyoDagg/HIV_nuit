<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFourElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('four_elements', function (Blueprint $table) {
            $table->id();
            $table->string('windTitle');
            $table->string('windText');
            $table->string('fireTitle');
            $table->string('fireText');
            $table->string('earthTitle');
            $table->string('earthText');
            $table->string('waterTitle');
            $table->string('waterText');

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
        Schema::dropIfExists('four_elements');
    }
}
