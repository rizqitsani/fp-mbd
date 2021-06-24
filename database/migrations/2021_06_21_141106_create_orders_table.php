<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->smallInteger('order_id')->primary();
            $table->char('customer_id', 5)->nullable();
            $table->smallInteger('employee_id')->nullable();
            $table->date('order_date')->nullable();
            $table->date('required_date')->nullable();
            $table->date('shipped_date')->nullable();
            $table->smallInteger('ship_via')->nullable();
            $table->decimal('freight', 9, 7)->nullable();
            $table->string('ship_name', 40)->nullable();
            $table->string('ship_address', 60)->nullable();
            $table->string('ship_city', 15)->nullable();
            $table->string('ship_region', 15)->nullable();
            $table->string('ship_postal_code', 10)->nullable();
            $table->string('ship_country', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
