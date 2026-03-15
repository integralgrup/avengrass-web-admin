<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class UsingArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'using_area';

    protected $fillable = [
        'using_area_id',
        'lang',
        'title',
        'seo_url',
        'description',
        'summary',
        'image',
        'icon1',
        'icon2',
        'alt',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    // Define relationship with ProductImage model
 

}
