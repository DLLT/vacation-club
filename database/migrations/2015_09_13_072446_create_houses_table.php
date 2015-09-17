<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->string('suburb');
			$table->string('distToCity');
            $table->string('availTrans');
			$table->string('noRooms');
            $table->string('airCon');
			$table->boolean('swimming');
            $table->string('points');
			$table->string('discounts');
            $table->nullabletimestamps();
			$table->integer('userId');
    });
	
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('houses');
    }
}
