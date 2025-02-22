<?php

use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CollegeClaimController;
use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\CollegeEditController;
use App\Http\Controllers\Admin\CollegeListController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\StateDistrictController;

use App\Http\Controllers\BillController;

use App\Http\Controllers\CollegeAdmin\CollegeAdminController;

use App\Http\Controllers\FeesStructureController;
use App\Http\Controllers\PlacementController;
use App\Models\FeesStructure;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

//Authentication
Route::get('admin/login', [AuthController::class, 'admin_login'])->name('admin.login');
Route::post('admin/login/submit', [AuthController::class, 'admin_login_submit'])->name('admin.login.submit');

Route::middleware('user-access')->group(function () {

    Route::get('admin/logout', [AuthController::class, 'admin_logout'])->name('admin.logout');
    //admin dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/course_category/add', [CourseCategoryController::class, 'course_category_add'])->name('course.category.add');
    Route::get('admin/course_category/list', [CourseCategoryController::class, 'course_category_list'])->name('course.category.list');
    Route::get('admin/course_category/edit/{id}', [CourseCategoryController::class, 'course_category_edit'])->name('course.category.edit');
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
    Route::get('admin/college/placement/add',[CollegeController::class,'placement'])->name('college.placement');
    //college edit information
    Route::get('admin/college/info/edit/{college_id}', [CollegeEditController::class, 'college_info_edit'])->name('college.info.edit');
    Route::get('admin/college/address/edit/{college_id}', [CollegeEditController::class, 'college_address_edit'])->name('college.address.edit');
    Route::get('admin/college/course/edit/{college_id}', [CollegeEditController::class, 'college_course_edit'])->name('college.course.edit');
    Route::get('admin/college/faculty/list/{college_id}', [CollegeEditController::class, 'college_faculty_list'])->name('college.faculty.list.edit');
    Route::get('admin/college/faculty/edit/{college_id}/{faculty_id}', [CollegeEditController::class, 'college_faculty_edit'])->name('college.faculty.edit');
    Route::get('admin/college/gallery/edit/{college_id}', [CollegeEditController::class, 'college_gallery_edit'])->name('college.gallery.edit');
    Route::get('admin/college/college/new/faculty/{college_id}', [CollegeEditController::class, 'college_faculty_new'])->name('college.new.faculty');
    Route::get('admin/college/placement/edit/{college_id}', [CollegeEditController::class, 'college_placement_edit'])->name('college.placement.edit');
    // placement
    Route::get('admin/placement/list',[PlacementController::class,'index'])->name('placement.list');
    Route::get('admin/placement/add',[PlacementController::class, 'add'])->name('placement.add');
    Route::post('admin/placement/store',[PlacementController::class, 'store'])->name('placement.store');
    Route::get('admin/placement/edit/{id}',[PlacementController::class,'edit'])->name('placement.edit');
    Route::post('admin/placement/update/{id}',[PlacementController::class, 'update'])->name('placement.update');

    // bill controller
    Route::get('admin/original-list',[BillController::class, 'original_list'])->name('list.original');
    Route::get('admin/proforma-list',[BillController::class, 'proforma_list'])->name('list.proforma');
    Route::get('admin/lead_model/add',[BillController::class, 'lead_model_add'])->name('add.lead.model');
    Route::post('admin/lead_model/store',[BillController::class, 'store'])->name('store.lead.model');
    Route::get('admin/original/edit/{id}',[BillController::class,'original_edit'])->name('edit.original.bill');
    Route::post('admin/original/update/{id}',[BillController::class, 'original_update'])->name('update.original.bill');
    Route::get('admin/proforma/edit/{id}',[BillController::class,'proforma_edit'])->name('edit.proforma.bill');
    Route::post('admin/proforma/update/{id}',[BillController::class, 'proforma_update'])->name('update.proforma.bill');
    // bill controller

    // Fees Course Eligibility

    Route::get('admin/college/coursefeeseligibility/list/{college_id}', [CollegeEditController::class, 'college_course_fees_eligibility_list'])->name('college.course.fees.eligibility.list.edit');
    Route::get('admin/college/coursefeeseligibility/edit/{course_fees_id}/{college_id}', [CollegeEditController::class, 'college_course_fees_eligibility_edit'])->name('college.course.fees.eligibility.edit');
    Route::get('admin/college/coursefeeseligibility/add/{college_id}', [CollegeEditController::class, 'college_add_new_course'])->name('college.course.fees.eligibility.add.new');
    //list
    Route::get('admin/college/list', [CollegeListController::class, 'list'])->name('college.list');
    Route::get('district/list/{state_id}', [StateDistrictController::class, 'districts_under_states'])->name('district.list');

    // fees structure
    Route::get('admin/fees_structure/list',[FeesStructureController::class, 'index'])->name('admin.fees_structure');
    Route::get('admin/fees_structure/add',[FeesStructureController::class, 'add'])->name('admin.fees_structure.add');
    Route::post('admin/fees_structure/store',[FeesStructureController::class, 'store'])->name('admin.fees_structure.store');

    //Article
    Route::get('admin/article/add', [ArticleController::class, 'add_article'])->name('article.add');
    Route::post('admin/article/submit', [ArticleController::class, 'submit_article'])->name('article.submit');
    Route::get('admin/article/category/add', [ArticleCategoryController::class, 'add'])->name('article.category.add');
    Route::get('admin/article/category/list', [ArticleCategoryController::class, 'category_list'])->name('article.category.list');
    Route::get('admin/article/list', [ArticleController::class, 'list_article'])->name('article.list');
    Route::get('admin/article/edit/{id}', [ArticleController::class, 'edit_article'])->name('article.edit');
    Route::post('admin/article/update', [ArticleController::class, 'update_article'])->name('article.update');
    //College Claim
    Route::get('admin/college/claim/list', [CollegeClaimController::class, 'claim_queries'])->name('college.claim.list');
    Route::get('admin/college/claim/details/{college_id}', [CollegeClaimController::class, 'claim_details'])->name('college.claim.details');
    //College Admin
    Route::get('admin/college/collegeadmin/add/{college_id}', [CollegeAdminController::class, 'add_college_admin'])->name('college.collegeadmin.add');
    Route::post('admin/college/collegeadmin/submit', [CollegeAdminController::class, 'add_college_admin_submit'])->name('college.collegeadmin.submit');
});
