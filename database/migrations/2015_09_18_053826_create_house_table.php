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
			$table->string('userID');
			$table->string('city');
			$table->string('distToCity');
			$table->string('availTrains');
			$table->string('noRooms');
			$table->string('airCon');
			$table->string('heating');
			$table->string('swimming');
			$table->string('pointsNeeded');
			$table->string('discounts');
			$table->string('image');
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
