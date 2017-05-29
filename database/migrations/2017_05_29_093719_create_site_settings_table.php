<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('contact_address');
            $table->string('facebook_page_url');
            $table->string('twitter_page_url');
            $table->string('youtube_page_url');
            $table->string('googleplus_page_url');
            $table->string('default_page_title');
            $table->string('default_meta_keys');
            $table->string('default_meta_description');
            $table->string('author_name');
            $table->string('author_email');
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
        Schema::dropIfExists('site_settings');
    }
}
