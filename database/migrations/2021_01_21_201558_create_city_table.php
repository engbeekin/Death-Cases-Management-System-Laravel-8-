<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration {

	public function up()
	{
		Schema::create('city', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('cityname', 200);
		});
	}

	public function down()
	{
		Schema::drop('city');
	}
}
