<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBartenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bartender', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('video')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('image');
            $table->string('experience')->nullable();
            $table->String('address',256);
            $table->string('cv');
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
        Schema::dropIfExists('bartender');
    }
}
