<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->string('user_uuid')->unique();
            $table->string('owner')->nullable();
            $table->string('base_country')->nullable();
            $table->string('default_currency')->nullable();
            $table->double('account_balance')->default(0.00);
            $table->string('account_email')->unique()->nullable();
            $table->string('account_phone')->unique()->nullable();
            $table->string('account_phone_network')->nullable();
            $table->string('account_type')->nullable();
            $table->string('default_payment_method_id')->nullable();
            $table->string('default_payment_method_type')->nullable();
            $table->timestamp('last_updated')->nullable();
            $table->boolean('closed')->default(false);
            $table->timestamps();

        });

        Schema::table('accounts', function (Blueprint $table) {
            $table->foreign('user_uuid')->references('uuid')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
