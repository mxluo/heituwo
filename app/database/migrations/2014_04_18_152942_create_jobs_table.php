<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('jobs');
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');//自增唯一ID
		    $table->string('job',128);//名称
		    $table->string('en_job',128)->nullable();//英文名称
		    $table->integer('number')->nullable()->default(1);//数量
		    $table->string('place', 128)->nullable();//地点
		    $table->Text('duty')->nullable();//职责
		    $table->Text('ask_for')->nullable();//要求
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
		Schema::dropIfExists('jobs');
	}

}
