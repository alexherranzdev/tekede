<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('company_type')) {
            Schema::create('company_type', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
            });
        }

        Schema::table('company_type', function(Blueprint $table) {
            $table->string('name', 40);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_type');
	}

}
