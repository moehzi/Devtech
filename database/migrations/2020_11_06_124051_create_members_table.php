<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function (Blueprint $table) {
			$table->id();
			$table->string('nama', 100);
			$table->string('nra', 12);
			$table->string('kelas', 12);
			$table->string('jenis_kelamin', 12);
			$table->date('ttl');
			$table->string('jabatan', 50);
			$table->string('alamat', 50);
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
		Schema::dropIfExists('members');
	}
}
