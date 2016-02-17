<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeleksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_seleksi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid', 64);
            $table->string('fullname', 128);
            $table->string('fokus', 128);
            $table->string('asal_kota', 64);
            $table->string('asal_sekolah', 254);
            $table->string('ttl', 254);
            $table->text('cita-cita');
            $table->text('motto');
            $table->text('hobi');
            $table->string('email',256);
            $table->string('hp', 64);
            $table->string('status', 18);
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
        Schema::drop('user_seleksi');
    }
}
