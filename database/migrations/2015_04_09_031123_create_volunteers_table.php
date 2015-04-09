<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('volunteers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->string('password')->nullable();
			$table->enum('gender', ['male', 'female'])->nullable();
			$table->date('birth')->nullable;
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			$table->string('occupation')->nullable();
			$table->enum('education', ['under_elementary', 'elementary', 'junior', 'senior', 'bachelor', 'master', 'doctor'])->nullable();
			$table->string('emergence_contact')->nullable();
			$table->string('emergence_phone')->nullable();
			$table->rememberToken();
			$table->string('validated_key')->nullable();
			$table->dateTime('validated_time')->nullable();
			$table->boolean('confirmed')->default(0);
			$table->boolean('enabled')->nullable(1);
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
		Schema::drop('volunteers');
	}

}
