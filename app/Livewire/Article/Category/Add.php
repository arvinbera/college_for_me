<?php

namespace App\Livewire\Article\Category;

use App\Models\ArticleCategory;
use Livewire\Component;

class Add extends Component
{
    public $category_name;
    public function render()
    {
        return view('livewire.article.category.add');
    }

    public function add_category()
    {
        $entity = new ArticleCategory();
        $entity->title = $this->category_name;
        $entity->save();
        flash('Category added successfully.');
        $this->reset('category_name');
    }
}
