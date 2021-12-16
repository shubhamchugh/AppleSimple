<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('content_id')->unsigned();
            $table->string('price');
            $table->string('site_title');
            $table->string('site_description');
            $table->string('site_keywords');
            $table->string('age');
            $table->string('response_time');
            $table->string('alexa_global_rank');
            $table->string('alexa_pop');
            $table->string('alexa_regional_rank');
            $table->string('alexa_back');
            $table->string('host_ip');
            $table->string('host_country');
            $table->string('host_isp');
            $table->string('blacklist_result');
            $table->text('whois_data');
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
        Schema::dropIfExists('metadata');
    }
}
