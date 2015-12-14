<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('url');
            $table->text('address');
            $table->string('region');
            $table->string('country');
            $table->string('code');
            $table->string('phone1', 32);
            $table->string('phone2', 32);
            $table->string('email');
            $table->json('hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('businesses');
    }
}
