<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_product', function (Blueprint $table) {
            $table->foreign('id_product_category')->references('id')->on('table_product_category');
        });
        Schema::table('table_purchase_lines', function (Blueprint $table) {
            $table->foreign('id_purchase')->references('id')->on('table_purchase');
        });
        Schema::table('table_purchase', function (Blueprint $table) {
            $table->foreign('id_suplier')->references('id')->on('table_suplier');
            $table->foreign('id_product')->references('id')->on('table_product');
        });
        
        Schema::table('table_transactions', function (Blueprint $table) {
            $table->foreign('id_product')->references('id')->on('table_product');
            $table->foreign('id_customer')->references('id')->on('table_customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
