<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('cases');
		Schema::create('cases', function(Blueprint $table)
		{
			$table->increments('id');//自增唯一ID
		    $table->string('case_title',255)->index();//标题
		    $table->string('case_image', 512)->nullable();//封面图片
		    $table->string('client_name', 128)->nullable();//客户名称
		    $table->string('service_content', 512)->nullable();//服务内容
		    $table->Text('case_desc')->nullable();//描述
		    $table->integer('case_industry')->index();//行业分类
		    $table->integer('case_specialty')->index();//专业分类
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
		Schema::dropIfExists('cases');
	}

}
