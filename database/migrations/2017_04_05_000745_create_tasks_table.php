<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('tasks', function (Blueprint $table) {
			$table->increments('id');
			$table->string('description');
			$table->integer('reports_to_area_id');
			$table->string('assignted_to_id');
			$table->string('delegate_to_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('tasks');
	}
	function __construct() {
	}
}
