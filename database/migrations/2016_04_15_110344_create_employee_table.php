<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('login_id')
                ->unsigned();
            $table->foreign('login_id')
                ->references('id')
                ->on('logins');
            $table->integer('information_id')
                ->unsigned();
            $table->foreign('information_id')
                ->references('id')
                ->on('informations');
            $table->enum('employee_type', ['teaching', 'non-teaching']);
            $table->integer('department_id')
                ->nullable()
                ->unsigned();
            $table->foreign('department_id')
                ->references('id')
                ->on('departments');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
