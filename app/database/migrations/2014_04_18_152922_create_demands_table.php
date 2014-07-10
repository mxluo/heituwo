<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('demands');
		Schema::create('demands', function(Blueprint $table)
		{
			$table->increments('id');//自增唯一ID
		    $table->string('name',32)->nullable();//姓名
		    $table->string('email',100)->nullable();//邮箱
		    $table->string('tel', 32)->nullable();//电话
		    $table->string('company', 128)->nullable();//公司
		    $table->string('product', 128)->nullable();//产品
		    $table->Text('detail')->nullable();//详情
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
		Schema::dropIfExists('demands');
	}

}
