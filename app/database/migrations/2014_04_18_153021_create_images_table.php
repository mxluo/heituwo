<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('images');
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');//自增唯一ID		   
		    $table->integer('cid')->index();//用户状态
		    $table->string('name', 512);//Email
		    $table->integer('sort')->default(0)->index();//用户状态
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('images');
	}

}
