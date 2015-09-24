<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('tenant')->hasTable('customers')) {
            Schema::connection('tenant')->create('customers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('firstname', 32);
                $table->string('lastname', 100);
                $table->string('nif', 9);
                $table->string('email');
                $table->boolean('bloq');
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
        if (Schema::connection('tenant')->hasTable('customers')) {
            Schema::connection('tenant')->drop('customers');
        }
    }

}
