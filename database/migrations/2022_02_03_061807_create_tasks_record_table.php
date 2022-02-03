<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tasks_assign_id');
            $table->date('tasks_record_date')->nullable();
            $table->string('tasks_record_hours','100');
            $table->string('box_id','12');
            $table->timestamps();
            $table->foreign('tasks_assign_id')->references('id')->on('tasks_assign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks_record');
    }
}
