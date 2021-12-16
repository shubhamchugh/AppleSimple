<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['published_at'];

    protected $fillable = [
        'author_id',
        'page_type',
        'page_slug',
        'page_title',
        'page_content',
        'status',
        'published_at',
        
    ];
    
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function page()
    {
        return $this->hasMany(page::class, 'author_id');
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now())->where("status", "=", "1");
    }

    public function scopeScheduled($query)
    {
        return $query->where("published_at", ">", Carbon::now());
    }

    public function scopeDraft($query)
    {
        return $query->where("status", "=", "0");
    }

    public function scopeOnlyPage($query)
    {
        return $query->where("page_type", "=", "page");
    }

    public function publicationLabel()
    {
        
        if (!$this->published_at) {
            return '<span class="badge badge-pill badge-light-primary mr-1">Draft</span>';
        } elseif ($this->published_at && $this->published_at->isFuture()) {
            return '<span class="badge badge-pill badge-light-warning mr-1">Schedule</span>';
        } else {
            return '<span class="badge badge-pill badge-light-success mr-1">Published</span>';
        }
    }

    public function getDateAttribute($value)
    {
        return is_null($this->published_at) ? '': $this->published_at->diffForHumans();
    }

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) {
            $format = $format . " H:i:s";
        }

        return $this->created_at->format($format);
    }
}
