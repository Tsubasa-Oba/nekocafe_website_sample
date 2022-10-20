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
        Schema::create('cats', function (Blueprint $table) {
            $table->id()->comment('所属猫');
            $table->string('name', 100)->comment('猫名前');
            $table->date('birthday')->nullable()->comment('誕生日');
            $table->string('photo_URL')->nullable()->comment('猫画像URL');
            $table->string('Instagram_URL')->nullable()->comment('猫InstagramURL');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
};
