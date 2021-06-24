<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmployeeTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_territories', function (Blueprint $table) {
            $table->foreign('territory_id')->references('territory_id')->on('territories');
            $table->foreign('employee_id')->references('employee_id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_territories', function (Blueprint $table) {
            $table->dropForeign('employee_territories_territory_id_foreign');
            $table->dropForeign('employee_territories_employee_id_foreign');
        });
    }
}
