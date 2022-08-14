<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->text('about');
            $table->text('refund');
            $table->text('purchase_guide');
            $table->text('privacy');
            $table->text('address');
            $table->string('android_app_link');
            $table->string('ios_app_link');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('copyright_text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('site_infos');
    }
};
