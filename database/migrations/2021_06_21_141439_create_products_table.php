<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->smallInteger('product_id')->primary();
            $table->string('product_name', 40);
            $table->smallInteger('supplier_id')->nullable();
            $table->smallInteger('category_id')->nullable();
            $table->string('quantity_per_unit', 20)->nullable();
            $table->decimal('unit_price', 9, 7)->nullable();
            $table->smallInteger('units_in_stock')->nullable();
            $table->smallInteger('units_on_order')->nullable();
            $table->smallInteger('reorder_level')->nullable();
            $table->integer('discontinued');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
