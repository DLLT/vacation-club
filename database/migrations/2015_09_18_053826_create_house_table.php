<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('house', function (Blueprint $table) {
                        $table->increments('id');
                        // Foreign keyi
                        $table->string('name');
                        $table->string('description');
                        $table->string('city');
			$table->string('suburb');
			$table->string('distcity');
			$table->string('transport');
			$table->string('numrooms');
			$table->string('aircon');
			$table->string('heating');
			$table->string('swimmingpool');
			$table->string('points');
			$table->string('discount');
                        $table->string('image');
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
        Schema::drop('house');
    }
}
