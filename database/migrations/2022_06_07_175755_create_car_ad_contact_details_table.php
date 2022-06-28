<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarAdContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_ad_contact_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_ad_id');
            $table->string('trade_name');
            $table->string('contact_no');
            $table->string('email')->nullable();
            $table->string('post_code')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('car_ad_contact_details');
    }
}
