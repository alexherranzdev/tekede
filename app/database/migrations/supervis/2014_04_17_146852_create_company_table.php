<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('company')) {
            Schema::create('company', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('code')->unique();
                $table->boolean('status');
                $table->timestamps();
            });
        }

        // Add column
        Schema::table('company', function(Blueprint $table)
        {
            $table->string('name',40);
            $table->string('email',50);
            $table->string('phone',15)->nullable();

            $table->integer('zone_id')->unsigned();
            $table->foreign('zone_id')->nullable()->references('id')->on('zone');

            $table->string('city', 40)->nullable();
            $table->string('cif',15)->nullable();

            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->nullable()->references('id')->on('country');

            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('plans');

            $table->integer('company_type_id')->unsigned();
            $table->foreign('company_type_id')->nullable()->references('id')->on('company_type');

            $table->integer('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('languages');
        });

        // DROP user_id
        if(Schema::hasColumn('company','user_id')){
            Schema::table('company', function($table){
               $table->dropColumn('user_id');
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
        Schema::drop('company');
    }

}
