<?php

namespace App\Livewire\Article\Category;

use App\Models\ArticleCategory;
use Livewire\Component;

class Categorylist extends Component
{
    public function render()
    {
        return view('livewire.article.category.categorylist', ['article_categories' => ArticleCategory::all()]);
    }
}
