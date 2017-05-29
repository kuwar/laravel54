<?php

use Illuminate\Database\Seeder;

class SiteSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_settings')->insert([
            'site_name' => str_random(10),
            'contact_email' => str_random(10).'@gmail.com',
            'contact_phone' => '1234567890',
            'contact_address' => '1234567890',
            'facebook_page_url' => '1234567890',
            'twitter_page_url' => '1234567890',
            'youtube_page_url' => '1234567890',
            'googleplus_page_url' => '1234567890',
            'default_page_title' => '1234567890',
            'default_meta_keys' => '1234567890',
            'default_meta_description' => '1234567890',
            'author_name' => 'Saurav Kuwar',
            'author_email' => 'kuwarsaurav21@gmail.com',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
