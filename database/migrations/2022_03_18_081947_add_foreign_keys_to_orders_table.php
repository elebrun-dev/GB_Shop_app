<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign(['shipment_id'], 'orders_ibfk_2')->references(['id'])->on('shipment_costs');
            $table->foreign(['tva_id'], 'orders_ibfk_1')->references(['id'])->on('tva');
            $table->foreign(['customer_id'], 'orders_ibfk_3')->references(['id'])->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_ibfk_2');
            $table->dropForeign('orders_ibfk_1');
            $table->dropForeign('orders_ibfk_3');
        });
    }
}
