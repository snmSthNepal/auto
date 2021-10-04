<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('servicing')) {
            //do nothing
        }else{
            Schema::create('servicing', function (Blueprint $table) {
            $table->increments('servicingID');
            $table->integer('userID')->unsigned();
            $table->integer('showroomID')->unsigned()->nullable();//nullable for now as it can be empty as all servicing is for autopoint only
            $table->char('name', 50);
            $table->string('bikeName', 20);
            $table->string('servicingType', 20);
            $table->string('warrantyType', 20);
            $table->string('email')->nullable();
            $table->text('phone');
            $table->text('comment')->nullable();
            $table->date('lastDate')->nullable();
            $table->date('serviceDate');
            $table->integer('totalKm')->unsigned()->nullable();
            $table->char('bikeNum', 25);
            $table->string('date');
            $table->string('status');
            $table->string('totalAmount')->nullable();
            $table->string('completeComment')->nullable();
            $table->string('showroomID');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicing');
    }
}
