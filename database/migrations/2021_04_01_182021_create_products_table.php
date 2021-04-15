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
            $table->id();
            $table->unsignedBigInteger('Store_id');
            $table->string("Product_Name",25);
            $table->string("Product_Company",25);
            $table->string("Category",25);
            $table->string("Type",25);
            $table->string("Size_Range",25);
            $table->integer("Price");
            $table->boolean("Discount");
            $table->string("Discount_amount")->nullable();
            $table->integer("Total_Quantity");
            $table->engine = 'InnoDB';
            $table->string("image");
            $table->timestamps();
            $table->foreign('Store_id')->references('id')->on('Stores')->onDelete('cascade');
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
