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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->uniqid();
            $table->string('urdu_name')->nullable();
            $table->string('flag_image')->nullable();
            $table->string('abbr')->nullable()->comment("Abbreviation");
            $table->string('display_name')->nullable();
            $table->tinyInteger('is_active')->default(1)->comment("0=De-Active, 1=Active");
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
        Schema::dropIfExists('countries');
    }
};
