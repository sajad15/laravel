<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_user', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->foreignId('product_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->unsignedInteger('price');
            $table->unsignedInteger('harga_product');
            $table->unsignedTinyInteger('quantity');
            $table->timestamps();
            $table->dateTime('checkout_at')->nullable()->default(null);
            $table->enum('status', ['cart', 'checkout', 'end']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_user');
    }
}
