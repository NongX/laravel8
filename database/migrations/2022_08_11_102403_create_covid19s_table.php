<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovid19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid19s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->date('date')->nullable();
            $table->string('country')->nullable();
            $table->integer('total')->nullable();
            $table->integer('active')->nullable();
            $table->integer('death')->nullable();
            $table->integer('recovered')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covid19s');
    }
}