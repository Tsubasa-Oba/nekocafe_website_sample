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
        Schema::table('cats', function (Blueprint $table) {
            $table->string('cats_type', 20)->nullable()->comment('猫種');
            $table->string('introduction', 20)->nullable()->comment('自己紹介文');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cats', function (Blueprint $table) {
            $table->string('cats_type', 20)->nullable()->comment('猫種');
            $table->string('introduction', 20)->nullable()->comment('自己紹介文');
        });
    }
};
