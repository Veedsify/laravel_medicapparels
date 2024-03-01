<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('analytics', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('url');
            $table->string('method');
            $table->string('user_agent');
            $table->string('referrer')->nullable();
            $table->string('referrer_host')->nullable();
            $table->string('device')->nullable();
            $table->string('platform')->nullable();
            $table->string('browser')->nullable();
            $table->string('browser_version')->nullable();
            $table->string('robot')->nullable();
            $table->string('robot_name')->nullable();
            $table->string('robot_version')->nullable();
            $table->string('robot_company')->nullable();
            $table->string('robot_company_url')->nullable();
            $table->string('robot_url')->nullable();
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('region')->nullable();
            $table->string('region_code')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('timezone')->nullable();
            $table->string('continent')->nullable();
            $table->string('continent_code')->nullable();
            $table->string('currency')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->string('currency_symbol_native')->nullable();
            $table->string('calling_code')->nullable();
            $table->string('flag')->nullable();
            $table->string('emoji_flag')->nullable();
            $table->string('emoji_unicode')->nullable();
            $table->string('asn')->nullable();
            $table->string('org')->nullable();
            $table->string('isp')->nullable();
            $table->string('connection_type')->nullable();
            $table->string('connection_type_label')->nullable();
            $table->string('abuse')->nullable();
            $table->string('user_type')->nullable();
            $table->string('threat')->nullable();
            $table->string('threat_type')->nullable();
            $table->string('threat_level')->nullable();
            $table->string('threat_confidence')->nullable();
            $table->string('last_seen')->nullable();
            $table->string('hostname')->nullable();
            $table->string('proxy_type')->nullable();
            $table->string('proxy_level')->nullable();
            $table->string('proxy_last_seen')->nullable();
            $table->string('proxy_description')->nullable();
            $table->string('query')->nullable();
            $table->string('search_engine')->nullable();
            $table->string('search_engine_host')->nullable();
            $table->string('search_engine_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytics');
    }
};
