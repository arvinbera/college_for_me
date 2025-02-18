<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'article_slug', 'meta_description', 'banner_image', 'article_category_id', 'article_description'];
}
