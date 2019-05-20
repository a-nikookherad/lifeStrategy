<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitPostTypesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('habit_post_types' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreign("id")->references("type")->on("habit_posts")->onDelete("cascade");
			$table->string('tableName');
			$table->string('tableRecord');
			$table->string('typeTitle');
			$table->string('state');
			$table->boolean('alarm');
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
		Schema::dropIfExists('habit_post_types');
	}
}
