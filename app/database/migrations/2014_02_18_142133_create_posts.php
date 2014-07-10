<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('posts');
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');//自增唯一ID
		    $table->longText('post_content')->nullable();//正文
		    $table->string('post_title',255)->index();//标题
		    $table->string('post_image', 512)->nullable();//封面图片
		    $table->Text('post_desc')->nullable();//描述
		    $table->integer('post_category')->index();//分类
		    $table->timestamps();
		    $table->softDeletes();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('posts');
	}

}