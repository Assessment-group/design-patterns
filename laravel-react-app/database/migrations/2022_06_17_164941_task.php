<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Task extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('Community');
            $table->string('status');
            $table->dateTime('deadline');
            $table->unsignedBigInteger('user_id')
                ->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('project_id')
                ->foreign('project_id')
                ->references('id')
                ->on('projects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}
