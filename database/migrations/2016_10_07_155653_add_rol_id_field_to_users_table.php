<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolIdFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('rol_id');
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('country_id');
            $table->string('status')->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('rol_id');
            $table->dropColumn('city_id');
            $table->dropColumn('state_id');
            $table->dropColumn('country_id');
            $table->dropColumn('status');
        });
    }
}
