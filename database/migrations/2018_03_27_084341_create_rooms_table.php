<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hotel')->comment('Hotel ID');
            $table->text('name')->comment('Room/Suite name');
            $table->longText('description')->comment('Long description of the room');
            $table->text('short_description')->comment('Short description of the room - max 140 chars.');
            $table->boolean('wifi')->comment('Room has WiFi');
            $table->boolean('smoking')->comment('Smoking is allowed');
            $table->integer('guests')->comment('Number of guests for this room');
            $table->integer('singleBeds')->comment('How many single beds');
            $table->integer('twinBeds')->comment('How many twin beds');
            $table->boolean('tv')->comment('Room has TV');
            $table->boolean('minibar')->comment('Room has minibar');
            $table->boolean('shower')->comment('Room has a shower');
            $table->boolean('bathtub')->comment('Room has a bathtub');
            $table->integer('bathrooms')->comment('How many bathrooms has the room');
            $table->boolean('breakfast')->comment('Complementary breakfast');
            $table->boolean('conciergeServices')->comment('Room has concierge services available.');
            $table->timestamps();
        });

        Schema::table('rooms', function(Blueprint $table) {
            $table->foreign('hotel')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
