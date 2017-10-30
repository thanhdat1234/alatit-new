<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->string('image');
            $table->integer('home');
            $table->integer('new');
            $table->integer('status');
            $table->integer('delete');
            $table->text('intro');
            $table->longText('content');
            $table->string('keywords');
            $table->string('description');
            $table->integer('cate_id')->unsigned();;
            $table->foreign('cate_id')->references('id')->on('cates');
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
		Schema::drop('posts');
	}

}
