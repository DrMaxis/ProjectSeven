<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();

          /*  Market Information */

            $table->string('name');
            $table->string('slug');
            $table->string('account_uuid')->unique();
            $table->string('default_currency')->nullable();
            $table->longText('about_market')->nullable();

        //  $table->string('buisness_type')->nullable();
            $table->string('offical_website')->nullable();
        /*  $table->string('selling_platforms')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('year_established')->nullable();
            $table->string('number_of_employees')->nullable();
            $table->text('main_product_types')->nullable();
        */

            /* Contact Information */

            $table->string('owners_name');
            $table->string('phone_network')->nullable();
            $table->string('business_email')->nullable();
            $table->string('business_phonenumber')->nullable();
        //  $table->string('managing_address')->nullable();
            $table->string('operating_address')->nullable();
            $table->string('country_of_origin')->nullable();

            /* Sourcing Information */

        /*
            $table->string('purchasing_volume')->nullable();
            $table->string('primary_sourcing_purpose')->nullable();
            $table->string('average_sourcing_frequency')->nullable();
            $table->longText('supplier_qualifications')->nullable();

        */


            /* Misc. */

            $table->boolean('active')->default(true);

            $table->timestamps();
        });

        Schema::table('markets', function (Blueprint $table) {
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
        Schema::dropIfExists('markets');
    }
}
