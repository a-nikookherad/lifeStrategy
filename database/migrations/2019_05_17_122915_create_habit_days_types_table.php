<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitDaysTypesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('habit_days_types' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('daysType');
			$table->integer('daysTypeID');
			$table->integer('daysTypeTitle');
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
		Schema::dropIfExists('habit_days_types');
	}
}
