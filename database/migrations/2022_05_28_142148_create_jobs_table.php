<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('employer');
            $table->string('company');
            $table->string('post');
            $table->string('last_date');
            $table->string('details');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
