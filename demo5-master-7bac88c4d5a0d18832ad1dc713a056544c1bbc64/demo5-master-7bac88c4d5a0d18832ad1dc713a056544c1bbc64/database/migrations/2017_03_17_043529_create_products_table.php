<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->integer('price');
            $table->integer('sale');
            $table->string('image');
            $table->integer('home');
            $table->integer('new');
            $table->integer('hot');
            $table->integer('best_sale');
            $table->integer('status');
            $table->integer('delete');
            $table->text('intro');
            $table->longText('content');
            $table->string('keywords');
            $table->string('description');

            $table->integer('cate_id');
            $table->foreign('cate_id')->references('id')->on('cates');

            $table->integer('images_id');
            $table->foreign('images_id')->references('id')->on('images');
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
		Schema::drop('products');
	}

}
