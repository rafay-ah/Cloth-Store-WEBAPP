<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("stores");
        Schema::create('stores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->autoIncrement();
            $table->string("Store_Name",20);
            $table->string("Seller_Name",20);
            $table->Integer('Store_Code')->ob_get_length(5)->unsigned();
            $table->string("Email",26);
            $table->string('password',30);
            $table->string('Phone',11);
            $table->string('image',100);
            $table->boolean('Activeted')->default(false);
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
        Schema::dropIfExists('stores');
    }
}
