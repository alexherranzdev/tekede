<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('tenant')->create('memberships', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('firstname', 32);
            $table->string('lastname', 100);
            $table->string('nif', 9);
            $table->string('email');
            $table->boolean('status');
            $table->timestamps();
        });


        Schema::connection('tenant')->table('memberships', function($table){
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->reference('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('tenant')->drop('memberships');
    }

}
