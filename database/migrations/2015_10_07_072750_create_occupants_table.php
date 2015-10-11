<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('occupant', function (Blueprint $table) {
		     $table->increments('id');
                        // Foreign key
						$table->Integer('letId')->unsigned();
						$table->Integer('userId')->unsigned();
                        $table->timestamps();
						});
						
			Schema::table('occupant', function ($table) {
			$table->foreign('userId')
				->references('id')->on('user')
				->onDelete('cascade')
			->onUpdate('cascade');
			});
				
				Schema::table('occupant', function ($table) {
			$table->foreign('letId')
				->references('letId')->on('let')
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
