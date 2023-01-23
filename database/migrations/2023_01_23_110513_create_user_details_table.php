<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('username')->uniqid();
            $table->string('password');
            $table->string('email')->nullable();
            $table->bigInteger('phone_number')->nullable();
            $table->string('display_name')->nullable()->comment("user Profile Picture");
            $table->integer('is_password_change')->default(0);
            $table->integer('is_email_verified')->default(0);
            $table->tinyInteger('is_bad_attempts')->default(0)->comment("if equal or greater than 5 does not De-Active");
            $table->string('display_image')->nullable();
            $table->integer('officer_id');
            $table->integer('role_id');
            $table->integer('department_id');
            $table->tinyInteger('is_active')->default(1)->comment("0=De-Active, 1=Active");
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('user_details');
    }
};
