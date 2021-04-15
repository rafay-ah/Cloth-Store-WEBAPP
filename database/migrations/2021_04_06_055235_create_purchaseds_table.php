<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Customer_id');
            $table->unsignedBigInteger('Product_id');
            $table->integer("Quantity_number");
            $table->string("ProductName");
            $table->string("CustomerName");
            $table->string("customerAddress");
            $table->integer("Price");
            $table->boolean("Discount");
            $table->boolean("Delivery")->nullable();
            $table->boolean("checkout")->nullable();
            $table->string("Size_and_color");
            $table->engine="InnoDB";
            $table->foreign('Customer_id')->references('id')->on('Customers');
            $table->foreign('Product_id')->references('id')->on('Products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchaseds');
    }
}
