<?php

namespace App\Livewire\CourseCategory;

use App\Models\CourseCategory as ModelsCourseCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class CourseCategory extends Component
{
    public $course_category_name;
    public function submit_course_category()
    {
        $this->validate([
            'course_category_name' => 'required'
        ], [
            'course_category_name.required' => 'Course Category Name is required'
        ]);

        $entity = new ModelsCourseCategory();
        $entity->course_category_name = $this->course_category_name;
        $entity->course_category_slug = Str::slug($this->course_category_name);
        $entity->save();
        flash('Course Category saved successfully!');
        $this->reset('course_category_name');
    }
    public function render()
    {
        return view('livewire.course-category.course-category');
    }
}
