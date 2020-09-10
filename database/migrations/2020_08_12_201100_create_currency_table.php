<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_plural')->nullable();
            $table->string('country')->nullable();
            $table->string('country_code_iso3')->nullable();
            $table->string('symbol')->nullable();
            $table->string('symbol_native')->nullable();
            $table->string('code')->nullable();
            $table->integer('rounding')->nullable();
            $table->integer('decimal_digits')->nullable();
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
        Schema::dropIfExists('currency');
    }
}
