<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Hospitals', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('city')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('death', function(Blueprint $table) {
			$table->foreign('dis_id')->references('id')->on('disease')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('death', function(Blueprint $table) {
			$table->foreign('hospital_id')->references('id')->on('Hospitals')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('death', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('city')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('Hospitals', function(Blueprint $table) {
			$table->dropForeign('Hospitals_city_id_foreign');
		});
		Schema::table('death', function(Blueprint $table) {
			$table->dropForeign('death_dis_id_foreign');
		});
		Schema::table('death', function(Blueprint $table) {
			$table->dropForeign('death_hospital_id_foreign');
		});
		Schema::table('death', function(Blueprint $table) {
			$table->dropForeign('death_city_id_foreign');
		});
	}
}
