<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksAssignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_assign', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tasks_type_id');
            $table->string('supervisor_id','20');
            $table->string('location_id','14');
            $table->string('employee_id','11');
            $table->string('status','20')->default('open');
            $table->timestamps();
            $table->foreign('tasks_type_id')->references('id')->on('tasks_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks_assign');
    }
}
