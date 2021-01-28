<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration {

	public function up()
	{
		Schema::create('Hospitals', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('Hospitalname', 250);
			$table->string('phone', 15);
			$table->string('address', 100);
			$table->string('email', 200);
			$table->string('manager');
			$table->string('managerno', 15);
			$table->bigInteger('city_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Hospitals');
	}
}
