<?php

namespace App\Livewire\CourseCategory;

use App\Models\CourseCategory;
use Livewire\Component;
use Livewire\WithPagination;

class CourseCategoryList extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.course-category.course-category-list', ['college_categories' => CourseCategory::paginate(4)]);
    }
}
