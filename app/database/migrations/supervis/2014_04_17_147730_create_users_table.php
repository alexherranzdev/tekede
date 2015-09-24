<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function(Blueprint $table)
            {
                $table->increments('id');

                $table->string('firstname', 32);
                $table->string('lastname', 50);
                $table->string('username', 32);
                $table->string('email', 120)->unique();
                $table->string('password', 64);

                $table->integer('company_id')->unsigned();
                $table->foreign('company_id')->references('id')->on('company');


                $table->boolean('status')->default(0);
                $table->string('nif', 9)->nullable();

                $table->integer('language_id')->unsigned();
                $table->foreign('language_id')->references('id')->on('languages');

                $table->string('image')->nullable();
                $table->string('phone',14)->nullable();

                $table->timestamps();
            });
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
