<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('sur_name')->nullable();
            $table->string('display_name')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->boolean('trade_seller')->default(0);
            $table->string('trade_name')->nullable();
            $table->longText('location')->nullable();
            $table->longText('address')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('insurance_certificate')->nullable();
            $table->text('trade_logo')->nullable();
            $table->string('website_url')->nullable();
            $table->string('social_id')->nullable();
            $table->string('signup_method');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();
            $table->boolean('is_active')->default('0');
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
        Schema::dropIfExists('users');
    }
}
