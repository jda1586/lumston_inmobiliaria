<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->text('description');
            $table->string('type')->default('house');
            $table->string('address');
            $table->string('outside_number');
            $table->string('inside_number');
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('country_id');
            $table->string('postal_code');
            $table->string('suburb')->nullable();
            $table->integer('price');
            $table->string('unit');
            $table->float('latitude')->default(0);
            $table->float('longitude')->default(0);
            $table->string('status');
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
        Schema::drop('properties');
    }
}
