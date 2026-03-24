<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'service_image';

    public $timestamps = false;

    protected $fillable = [
        'service_id',
        'image_id',
        'lang',
        'image',
        'alt',
        'sort',
    ];

    // If you want to automatically cast created_at as datetime
    protected $dates = [
        'created_at',
        'deleted_at',
    ];
    
}
