<?php

namespace App\Http\Controllers\Admin;

use App\Core\FileHelper;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function add_article()
    {
        $article_categories = ArticleCategory::all();
        return view('admin.article.add', compact('article_categories'));
    }

    public function submit_article(Request $request)
    {
        $entity = new Article();
        $entity->title = $request->article_name;
        $entity->meta_description = $request->meta_description;
        $entity->banner_image = FileHelper::Upload($request->banner_image, null, FileHelper::$article_banner_image)->upload_name;
        $entity->article_category_id = $request->article_category_id;
        $entity->article_description = $request->article_description;
        $entity->save();
        flash('Article added successfully');
        return redirect()->back();
    }

    public function list_article()
    {
        $articles = Article::paginate(5);
        return view('admin.article.list', compact('articles'));
    }

    public function edit_article($id)
    {
        $article_details = Article::where('id', $id)->first();
        $article_categories = ArticleCategory::all();
        return view('admin.article.edit', compact('article_details', 'article_categories'));
    }

    public function update_article(Request $request)
    {
        $article_details = Article::where('id', $request->article_id)->first();
        $article_details->title = $request->article_name;
        if ($request->banner_image) {
            $article_details->banner_image = FileHelper::Upload($request->banner_image, $article_details->banner_image, FileHelper::$article_banner_image)->upload_name;
        }
        $article_details->meta_description = $request->meta_description;
        $article_details->article_category_id = $request->article_category_id;
        $article_details->article_description = $request->article_description;
        $article_details->update($article_details->toArray());
        flash('Article updated successfully');
        return redirect()->back();
    }

}
