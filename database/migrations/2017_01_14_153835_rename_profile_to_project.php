<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameProfileToProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            $profiles="profiles";
            $projects="projects";
              Schema::rename($profiles, $projects);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          // Schema::rename($projects, $profiles);
    }
}
