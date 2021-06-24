<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCustomerCustomerDemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_customer_demo', function (Blueprint $table) {
            $table->foreign('customer_type_id')->references('customer_type_id')->on('customer_demographics');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_customer_demo', function (Blueprint $table) {
            $table->dropForeign('customer_customer_demo_customer_type_id_foreign');
            $table->dropForeign('customer_customer_demo_customer_id_foreign');
        });
    }
}
