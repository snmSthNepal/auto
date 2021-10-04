<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showroom', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('company');
            $table->integer('totalQuota')->nullable();
            $table->integer('bookingQuota')->nullable();'
            $table->string('status');'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showroom');
    }
}
