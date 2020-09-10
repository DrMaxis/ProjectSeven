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
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('market_uuid')->unique();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->string('model')->nullable();
            $table->string('brand')->nullable();
            $table->longText('quick_details')->nullable();
            $table->longText('product_description')->nullable();
            $table->double('price')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->longText('images')->nullable();
            $table->string('category')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });

           Schema::table('products', function (Blueprint $table) {
            $table->foreign('market_uuid')->references('uuid')->on('markets')->onDelete('cascade');
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
