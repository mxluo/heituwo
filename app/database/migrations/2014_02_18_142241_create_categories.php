<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('categories');
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');//分类ID
			$table->string('name',255);//分类名
			$table->integer('type')->index();//类型
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('categories');
	}

}