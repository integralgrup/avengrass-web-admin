<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'service';

    public $timestamps = false;

    protected $fillable = [
        'service_id',
        'lang',
        'title',
        'seo_url',
        'description',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort',
    ];

    // If you want to automatically cast created_at as datetime
    protected $dates = [
        'created_at',
        'deleted_at',
    ];
    
}
