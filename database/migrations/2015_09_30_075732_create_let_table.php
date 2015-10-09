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
<<<<<<< HEAD
                        $table->increments('id');
=======
<<<<<<< HEAD
                        $table->increments('letId');
=======
                        $table->increments('id');
>>>>>>> origin/master
>>>>>>> origin/master
                        // Foreign key
						$table->Integer('houseId')->unsigned();
                        $table->string('startdate');
                        $table->string('enddate');
<<<<<<< HEAD
						$table->string('minrate');
						$table->string('available');
=======
			$table->string('minrate');
>>>>>>> origin/master
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
