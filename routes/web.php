<?php

use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\CollegeEditController;
use App\Http\Controllers\Admin\CollegeListController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\StateDistrictController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Authentication
Route::get('admin/login', [AuthController::class, 'admin_login'])->name('admin.login');
Route::post('admin/login/submit', [AuthController::class, 'admin_login_submit'])->name('admin.login.submit');

Route::middleware('user-access')->group(function () {

    Route::get('admin/logout', [AuthController::class, 'admin_logout'])->name('admin.logout');
    //admin dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/course/list', [CourseController::class, 'course_list'])->name('course.list');
    Route::get('admin/course/add', [CourseController::class, 'course_add'])->name('course.add');
    Route::get('admin/course/edit/{id}', [CourseController::class, 'course_edit'])->name('course.edit');
    Route::post('admin/course/update', [CourseController::class, 'course_update'])->name('course.update');
    Route::post('admin/course/submit', [CourseController::class, 'course_submit'])->name('course.submit');
    Route::get('admin/department/add', [DepartmentController::class, 'add'])->name('department.add');
    Route::get('admin/department/list', [DepartmentController::class, 'list'])->name('department.list');
    Route::get('admin/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
    //college add information
    Route::get('admin/college/add', [CollegeController::class, 'add'])->name('college.add');
    Route::get('admin/college/address/add', [CollegeController::class, 'address'])->name('college.address');
    Route::get('admin/college/faculty/add', [CollegeController::class, 'faculty'])->name('college.faculty');
    Route::get('admin/college/course/department/add', [CollegeController::class, 'course_department'])->name('college.course_department');
    Route::get('admin/college/gallery/add', [CollegeController::class, 'gallery'])->name('college.gallery');
    //college edit information
    Route::get('admin/college/info/edit/{college_id}', [CollegeEditController::class, 'college_info_edit'])->name('college.info.edit');
    Route::get('admin/college/address/edit/{college_id}', [CollegeEditController::class, 'college_address_edit'])->name('college.address.edit');
    Route::get('admin/college/course/edit/{college_id}', [CollegeEditController::class, 'college_course_edit'])->name('college.course.edit');
    Route::get('admin/college/faculty/list/{college_id}', [CollegeEditController::class, 'college_faculty_list'])->name('college.faculty.list.edit');
    Route::get('admin/college/faculty/edit/{college_id}', [CollegeEditController::class, 'college_faculty_edit'])->name('college.faculty.edit');
    Route::get('admin/college/gallery/edit/{college_id}', [CollegeEditController::class, 'college_gallery_edit'])->name('college.gallery.edit');

    //list
    Route::get('admin/college/list', [CollegeListController::class, 'list'])->name('college.list');
    Route::get('district/list/{state_id}', [StateDistrictController::class, 'districts_under_states'])->name('district.list');
    //Article
    Route::get('admin/article/add', [ArticleController::class, 'add_article'])->name('article.add');
    Route::get('admin/article/category/add', [ArticleCategoryController::class, 'add'])->name('article.category.add');
});
