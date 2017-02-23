<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('feedbacks', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('project_id')->unsigned();
          $table->string('fullname');
          $table->integer('requirement');
          $table->text('suggestion');
          $table->integer('convinience');
          $table->integer('ontime');
          $table->integer('price');
          $table->integer('complacency');
          $table->DateTime('date');
          $table->timestamps();
      });
      Schema::table('feedbacks', function($table) {
      $table->foreign('project_id')->references('id')->on('projects');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            //
        });
    }
}
