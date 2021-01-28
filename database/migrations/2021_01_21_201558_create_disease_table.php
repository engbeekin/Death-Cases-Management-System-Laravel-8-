<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseaseTable extends Migration {

	public function up()
	{
		Schema::create('disease', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('disname', 200);
		});
	}

	public function down()
	{
		Schema::drop('disease');
	}
}
