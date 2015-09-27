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
                        // Foreign key
						$table->Integer('userId')->unsigned();
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
		
		Schema::table('house', function ($table) {
			$table->foreign('userId')
				->references('id')->on('user')
				->onDelete('cascade')
				->onUpdate('cascade');
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
