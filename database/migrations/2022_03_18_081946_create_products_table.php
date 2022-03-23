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
            $table->integer('id', true);
            $table->string('name', 45)->nullable();
            $table->float('price', 10, 0)->nullable();
            $table->integer('discount');
            $table->text('description')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('weight')->nullable();
            $table->string('image')->nullable();
            $table->boolean('available');
            $table->integer('category_id')->nullable()->index('category_id');
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
