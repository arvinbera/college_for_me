<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function add()
    {
        return view('admin.article.category.add');
    }

    public function category_list()
    {
        return view('admin.article.category.list');
    }
}
