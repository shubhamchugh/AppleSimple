<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item');
            $table->mediumText('value')->nullable();
            $table->timestamps();
        });
        //Pre-insert SiteName
        DB::table('cms_settings')->insertGetId([
            'item' => 'site_name',
        ]);
        //Pre-insert Logo
        DB::table('cms_settings')->insertGetId([
            'item' => 'logo',
        ]);
        //Pre-insert Ad-bellow-title
        DB::table('cms_settings')->insertGetId([
            'item' => 'ad-bellow-title',
        ]);
        //Pre-insert Ad-in-loop
        DB::table('cms_settings')->insertGetId([
            'item' => 'ad-in-loop',
        ]);
        //Pre-insert Ad-in-HomePage
        DB::table('cms_settings')->insertGetId([
            'item' => 'ad-in-sidebar',
        ]);
        //Pre-insert theme Name
        DB::table('cms_settings')->insertGetId([
            'item' => 'themename',
        ]);
        //Pre-insert Analytics/webmaster code
        DB::table('cms_settings')->insertGetId([
            'item' => 'header-code',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_settings');
    }
}
