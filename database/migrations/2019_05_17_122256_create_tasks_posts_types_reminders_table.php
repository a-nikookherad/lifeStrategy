<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksPostsTypesRemindersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks_posts_types_reminders' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreign("id")->references("reminder")->on("tasks_posts_types")->onDelete("cascade");
			$table->string('title');
			$table->string('status' , 15);
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
		Schema::dropIfExists('tasks_posts_types_reminders');
	}
}
