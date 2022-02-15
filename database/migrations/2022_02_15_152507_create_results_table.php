<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('hTotal');    
            $table->integer('mTotal');
            $table->integer('sTotal');
            $table->integer('bTotal');
            $table->integer('hearts');    
            $table->integer('minds');
            $table->integer('souls');
            $table->integer('bodies');
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
        Schema::dropIfExists('results');
    }
}
