<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountPaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_payment_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->string('account_uuid');
            $table->string('customer_id');
            $table->timestamps();
        });


        Schema::table('account_payment_methods', function (Blueprint $table) {

            $table->foreign('account_uuid')->references('uuid')->on('accounts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_payment_methods');
    }
}
