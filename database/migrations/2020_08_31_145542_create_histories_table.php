<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->longText('Insurer & Policy No')->nullable();
            $table->string('Qsn1');
            $table->string('Qsn2');
            $table->string('Qsn3');
            $table->string('Qsn4');
            $table->string('Qsn5');
            $table->string('Qsn6');
            $table->string('Qsn7');
            $table->string('Qsn8');
            $table->string('Qsn9');
            $table->string('DoctorName');
            $table->timestamps();

            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
