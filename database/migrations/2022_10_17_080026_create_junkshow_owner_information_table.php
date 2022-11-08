<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junkshow_owner_information', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('junkshop_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->longText('address')->unique();
            $table->string('phonenumber')->unique();
            $table->date('birthDate');
            $table->string("gender");
            $table->timestamps();
            $table->foreign('junkshop_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('junkshow_owner_information');
    }
};
