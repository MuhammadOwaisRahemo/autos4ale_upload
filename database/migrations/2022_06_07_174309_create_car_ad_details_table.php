<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarAdDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_ad_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('car_ad_id');
            $table->string('name_title');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('price');
            $table->enum('trade_seller', ['trade', 'private']);
            $table->string('trade_name')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('post_code')->nullable();
            $table->string('telephone')->nullable();
            $table->string('ad_title');
            $table->string('subtitle')->nullable();
            $table->longText('feature')->nullable();
            $table->string('history_maintenance');
            $table->longText('advert_text');
            $table->longText('specification')->nullable();
            $table->longText('running_cost')->nullable();
            $table->longText('basic_history')->nullable();
            $table->text('video_url')->nullable();
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
        Schema::dropIfExists('car_ad_details');
    }
}
