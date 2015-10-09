<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('let', function (Blueprint $table) {
                        $table->increments('id');
                        // Foreign key
						$table->Integer('houseId')->unsigned();
                        $table->string('startdate');
                        $table->string('enddate');
						$table->string('minrate');
						$table->string('available');
                        $table->timestamps();
    });
	
	Schema::table('let', function ($table) {
			$table->foreign('houseId')
				->references('id')->on('house')
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
        //
    }
}
