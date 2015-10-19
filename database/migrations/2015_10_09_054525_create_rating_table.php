<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('rating', function (Blueprint $table) {
		        $table->increments('id');
                        // Foreign key
	        	$table->Integer('houseId')->nullable()->unsigned();
			$table->Integer('userId')->nullable()->unsigned();
			$table->Integer('numRate');
                        $table->timestamps();
						});
						
			Schema::table('rating', function ($table) {
			    $table->foreign('userId')
		        	->references('userId')->on('occupant')
				->onDelete('cascade')
			        ->onUpdate('cascade');
			});
				
			Schema::table('rating', function ($table) {
			    $table->foreign('letId')
				->references('id')->on('occupant')
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
