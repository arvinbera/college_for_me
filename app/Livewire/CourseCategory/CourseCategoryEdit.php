<?php

namespace App\Livewire\CourseCategory;

use App\Models\CourseCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class CourseCategoryEdit extends Component
{
    public $course_category_details, $course_category_id, $course_category_name;

    public function mount($id)
    {
        $this->course_category_id = $id;
        $this->course_category_details = CourseCategory::where('id', $id)->first();
        $this->course_category_name = $this->course_category_details->course_category_name;
    }

    public function update_course_category()
    {
        $this->validate([
            'course_category_name' => 'required',
        ], [
            'course_category_name.required' => 'Course Category Name is required.',
        ]);

        $course_category_details = CourseCategory::where('id', $this->course_category_id)->first();
        $course_category_details->course_category_name = $this->course_category_name;
        $course_category_details->course_category_slug = Str::slug($this->course_category_name);
        $course_category_details->update($course_category_details->toArray());
        flash('Course Category updated successfully.');
    }
    public function render()
    {
        return view('livewire.course-category.course-category-edit');
    }
}
