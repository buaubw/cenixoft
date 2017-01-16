<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCustomersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
          $table->text('address')->nullable()->change();
          $table->string('tel')->nullable()->change();
          $table->string('fax')->nullable()->change();
          $table->string('taxno')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
          $table->text('address');
          $table->string('tel');
          $table->string('fax');
          $table->string('taxno');
        });
    }
}
