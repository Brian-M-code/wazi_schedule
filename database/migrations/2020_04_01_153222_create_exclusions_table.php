<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExclusionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exclusions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->char('weekDay',20);
            $table->time('fromTime',0);
            $table->time('toTime',0);
            $table->date('exclusionDate');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreign('employeesId')->references('id')->on('employees');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exclusions');
    }
}