<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    if (Schema::hasTable('evaluate')) {
            //do nothing
        }else{
             Schema::create('evaluate', function (Blueprint $table) {
                $table->increments('evaluateID');
                $table->integer('userID')->unsigned();
                $table->integer('showroomID')->unsigned()->nullable();//nullable for now as it can be empty as all servicing is for autopoint only
                $table->char('name', 50);
                $table->string('bikeName');
                $table->string('bikeNum');
                $table->string('state');
                $table->string('model');
                $table->string('email')->nullable();
                $table->text('phone');
                $table->text('expectedPrice');
                $table->text('comment')->nullable();
                $table->string('date');
                $table->string('status');
                $table->string('replyPrice')->nullable();
                $table->string('replyComment')->nullable();
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
        Schema::dropIfExists('evaluate');
    }
}
