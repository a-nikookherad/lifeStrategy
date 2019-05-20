<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonPostsCategoriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lesson_posts_categories' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreign('id')->references('category')->on('lesson_posts')->onDelete("cascade");
			$table->string('title');
			$table->timestamps();
			$table->string('status' , 15);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('lesson_posts_categories');
	}
}
