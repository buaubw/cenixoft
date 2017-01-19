<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->text('filename');
          $table->integer('project_id')->unsigned();
          $table->DateTime('date');
          $table->string('by');
          $table->timestamps();
        });
        Schema::table('invoices', function($table) {
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
        Schema::dropIfExists('invoices');
    }
}
