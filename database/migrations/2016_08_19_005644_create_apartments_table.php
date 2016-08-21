<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no');
            $table->double('price');
            $table->integer('buildings_id')->unsigned();
            $table->foreign('buildings_id')->references('id')->on('buildings');
            $table->integer('renter_id')->unsigned()->nullable();
            $table->foreign('renter_id')->references('id')->on('renter');
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
        Schema::drop('apartments');
    }
}
