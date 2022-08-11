<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIDPWTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ID_PW', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('PW')->nullable();
            $table->float('money')->nullable();
            $table->string('IP')->nullable();
            $table->date('DAY')->nullable();
            $table->text('Name')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ID_PW');
    }
}
