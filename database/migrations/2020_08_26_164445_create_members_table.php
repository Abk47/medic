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
            $table->unsignedBigInteger('user_id');
            $table->string('company');
            $table->string('surname');
            $table->string('other_names');
            $table->date('DOB');
            $table->string('passport');
            $table->string('occupation');
            $table->string('address');
            $table->string('work_location');
            $table->string('home_location');
            $table->bigInteger('office_no')->nullable();
            $table->bigInteger('house_no')->nullable();
            $table->bigInteger('mobile_no');
            $table->string('user_email');
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
        Schema::dropIfExists('members');
    }
}
