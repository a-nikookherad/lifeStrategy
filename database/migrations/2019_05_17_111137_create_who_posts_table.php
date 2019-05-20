<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhoPostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('who_posts' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('userID')->unsigned();
			$table->foreign("userID")->references("id")->on("users")->onDelete("cascade");
			$table->string('img');
			$table->string('title');
			$table->integer('catID');
			$table->text('description');
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
		Schema::dropIfExists('who_posts');
	}
}
