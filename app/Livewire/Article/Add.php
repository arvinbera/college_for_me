<?php

namespace App\Livewire\Article;

use App\Models\Article;
use App\Models\ArticleCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    public $article_categories, $banner_image, $meta_description, $article_category_id, $article_description, $article_name;
    use WithFileUploads;
    public function mount()
    {
        $this->article_categories = ArticleCategory::all();
    }
    public function render()
    {
        return view('livewire.article.add');
    }

    public function submit_article()
    {
        $entity = new Article();
        $entity->title = $this->article_name;
        $entity->meta_description = $this->meta_description;
        $entity->article_category_id = $this->article_category_id;
        $entity->article_description = $this->article_description;
        // if ($this->banner_image) {
        //     $entity->banner_image = $this->banner_image->store('gallery');
        // }
        dd($entity);
        $entity->save();
        flash('success', 'Article added successfully');
    }
}
