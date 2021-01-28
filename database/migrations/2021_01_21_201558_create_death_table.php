<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeathTable extends Migration {

	public function up()
	{
		Schema::create('death', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('name', 200);
			$table->string('gender');
			$table->date('dateofdeath');
			$table->bigInteger('dis_id')->unsigned();
			$table->string('reason')->nullable();
			$table->bigInteger('hospital_id')->unsigned();
			$table->bigInteger('city_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('death');
	}
}
