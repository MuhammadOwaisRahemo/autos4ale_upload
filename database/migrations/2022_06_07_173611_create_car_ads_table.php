<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_ads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('category_id')->nullable();
            $table->enum('condition_type', ['new', 'used']);
            $table->enum('fuel', ['electric', 'other'])->default('other');
            $table->integer('brand_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('register_num');
            $table->string('title');
            $table->string('mileage_num')->nullable();
            $table->string('fuel_type');
            $table->string('engine_size');
            $table->string('color');
            $table->text('register_date');
            $table->longText('car_data');
            $table->text('route')->nullable();
            $table->enum('status', ['0', '1'])->default('0');
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
        Schema::dropIfExists('car_details');
    }
}
