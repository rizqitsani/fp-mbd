<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->smallInteger('employee_id')->primary();
            $table->string('last_name', 20);
            $table->string('first_name', 10);
            $table->string('title', 30)->nullable();
            $table->string('title_of_courtesy', 25)->nullable();
            $table->date('birth_date')->nullable();
            $table->date('hire_date')->nullable();
            $table->string('address', 60)->nullable();
            $table->string('city', 15)->nullable();
            $table->string('region', 15)->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->string('country', 15)->nullable();
            $table->string('home_phone', 24)->nullable();
            $table->string('extension', 4)->nullable();
            $table->binary('photo')->nullable();
            $table->text('notes')->nullable();
            $table->smallInteger('reports_to')->nullable();
            $table->string('photo_path', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
