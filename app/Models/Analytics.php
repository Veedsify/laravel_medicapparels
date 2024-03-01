<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'url',
        'method',
        'user_agent',
        'referrer',
        'referrer_host',
        'device',
        'platform',
        'browser',
        'browser_version',
        'robot',
        'robot_name',
        'robot_version',
        'robot_company',
        'robot_company_url',
        'robot_url',
        'country',
        'country_code',
        'region',
        'region_code',
        'city',
        'postal_code',
        'latitude',
        'longitude',
        'timezone',
        'continent',
        'continent_code',
        'currency',
        'currency_symbol',
        'currency_symbol_native',
        'calling_code',
        'flag',
        'emoji_flag',
        'emoji_unicode',
        'asn',
        'org',
        'isp',
        'connection_type',
        'connection_type_label',
        'abuse',
        'user_type',
        'threat',
        'threat_type',
        'threat_level',
        'threat_confidence',
    ];

}
