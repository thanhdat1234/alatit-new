<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('alias');
			$table->integer('top');
            $table->integer('footer');
            $table->integer('left');
            $table->integer('home');
            $table->integer('status');
            $table->integer('delete');
            $table->string('keywords');
            $table->string('description');
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
		Schema::drop('cates');
	}

}
