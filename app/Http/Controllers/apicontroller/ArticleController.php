<?php

namespace App\Http\Controllers\apicontroller;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        if ($article->count() > 0){
            $data = [
                'success'=> true,
                'data'=> $article,
                'statusCode' => 200,
                'message'=> 'Records fetch successfully',
            ];
            return response()->json($data,200);
        } else {
            $data = [
                'success'=> false,
                'error' => [
                    'message'=> 'No such records found',
                ],
                'statusCode' => 404,
            ];
            return response()->json($data, 404);
        }
    }
}
