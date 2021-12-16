<?php

namespace App\Models;

use App\Models\PostContent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Metadata extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'site_title',
        'site_description',
        'site_keywords',
        'age',
        'response_time',
        'alexa_global_rank',
        'alexa_pop',
        'alexa_regional_rank',
        'alexa_back',
        'host_ip',
        'host_country',
        'host_isp',
        'blacklist_result',
        'whois_data',
        'content_id'
    ];


    public function postContent()
    {
        return $this->belongsTo(PostContent::class, 'content_id');
    }
}
