<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->text('name');
            $table->longText('description');
            $table->text('street');
            $table->text('postcode');
            $table->text('city');
            $table->text('country');
            $table->text('hours');
            $table->unsignedInteger('user');
            $table->timestamps();
        });

        Schema::table('hotels', function(Blueprint $table) {
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
