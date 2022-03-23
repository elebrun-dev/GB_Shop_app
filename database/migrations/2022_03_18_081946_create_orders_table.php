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
            $table->integer('id', true);
            $table->string('number', 10)->nullable();
            $table->date('date')->nullable();
            $table->float('total', 10, 0)->nullable();
            $table->integer('customer_id')->nullable()->index('customer_id');
            $table->integer('tva_id')->nullable()->index('tva_id');
            $table->integer('shipment_id')->nullable()->index('shipment_id');
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
