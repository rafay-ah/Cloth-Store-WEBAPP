<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_infos', function (Blueprint $table) {
            $table->id();         
            $table->unsignedBigInteger('Product_id');
            $table->integer("Size")->ob_get_length(100)->unsigned();
            $table->string("Color");
            $table->integer("Quantity")->ob_get_length(100)->unsigned();;
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('Product_id')->references('id')->on('products')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_infos');
    }
}
