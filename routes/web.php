<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\QualificationsController;
use App\Http\Controllers\SocialmediasController;
use App\Http\Controllers\ContactformsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/auth/login');
});


Route::get('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/auth/login', [AuthController::class, 'loginForm'])->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'login'])->middleware('guest');
Route::get('/auth/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list']);
Route::get('/console/users/add', [UsersController::class, 'addForm']);
Route::post('/console/users/add', [UsersController::class, 'add']);
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+');


Route::get('/console/projects/list', [ProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/projects/add', [ProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/projects/add', [ProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/projects/edit/{project:id}', [ProjectsController::class, 'editForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/edit/{project:id}', [ProjectsController::class, 'edit'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/delete/{project:id}', [ProjectsController::class, 'delete'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/image/{project:id}', [ProjectsController::class, 'imageForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/image/{project:id}', [ProjectsController::class, 'image'])->where('project', '[0-9]+')->middleware('auth');



Route::get('/console/textcontents/list', [ContentsController::class, 'list'])->middleware('auth');
Route::get('/console/textcontents/add', [ContentsController::class, 'addForm'])->middleware('auth');
Route::post('/console/textcontents/add', [ContentsController::class, 'add'])->middleware('auth');
Route::get('/console/textcontents/edit/{content:id}', [ContentsController::class, 'editForm'])->where('content', '[0-9]+')->middleware('auth');
Route::post('/console/textcontents/edit/{content:id}', [ContentsController::class, 'edit'])->where('content', '[0-9]+')->middleware('auth');
Route::get('/console/textcontents/delete/{content:id}', [ContentsController::class, 'delete'])->where('content', '[0-9]+')->middleware('auth');

Route::get('/console/skills/list', [SkillsController::class, 'list'])->middleware('auth');
Route::get('/console/skills/add', [SkillsController::class, 'addForm'])->middleware('auth');
Route::post('/console/skills/add', [SkillsController::class, 'add'])->middleware('auth');
Route::get('/console/skills/edit/{skill:id}', [SkillsController::class, 'editForm'])->where('skill', '[0-9]+')->middleware('auth');
Route::post('/console/skills/edit/{skill:id}', [SkillsController::class, 'edit'])->where('skill', '[0-9]+')->middleware('auth');
Route::get('/console/skills/delete/{skill:id}', [SkillsController::class, 'delete'])->where('skill', '[0-9]+')->middleware('auth');

Route::get('/console/experiences/list', [ExperiencesController::class, 'list'])->middleware('auth');
Route::get('/console/experiences/add', [ExperiencesController::class, 'addForm'])->middleware('auth');
Route::post('/console/experiences/add', [ExperiencesController::class, 'add'])->middleware('auth');
Route::get('/console/experiences/edit/{experience:id}', [ExperiencesController::class, 'editForm'])->where('experience', '[0-9]+')->middleware('auth');
Route::post('/console/experiences/edit/{experience:id}', [ExperiencesController::class, 'edit'])->where('experience', '[0-9]+')->middleware('auth');
Route::get('/console/experiences/delete/{experience:id}', [ExperiencesController::class, 'delete'])->where('experience', '[0-9]+')->middleware('auth');

Route::get('/console/qualifications/list', [QualificationsController::class, 'list'])->middleware('auth');
Route::get('/console/qualifications/add', [QualificationsController::class, 'addForm'])->middleware('auth');
Route::post('/console/qualifications/add', [QualificationsController::class, 'add'])->middleware('auth');
Route::get('/console/qualifications/edit/{qualification:id}', [QualificationsController::class, 'editForm'])->where('qualification', '[0-9]+')->middleware('auth');
Route::post('/console/qualifications/edit/{qualification:id}', [QualificationsController::class, 'edit'])->where('qualification', '[0-9]+')->middleware('auth');
Route::get('/console/qualifications/delete/{qualification:id}', [QualificationsController::class, 'delete'])->where('qualification', '[0-9]+')->middleware('auth');

Route::get('/console/socialmedias/list', [SocialmediasController::class, 'list'])->middleware('auth');
Route::get('/console/socialmedias/add', [SocialmediasController::class, 'addForm'])->middleware('auth');
Route::post('/console/socialmedias/add', [SocialmediasController::class, 'add'])->middleware('auth');
Route::get('/console/socialmedias/edit/{socialmedia:id}', [SocialmediasController::class, 'editForm'])->where('socialmedia', '[0-9]+')->middleware('auth');
Route::post('/console/socialmedias/edit/{socialmedia:id}', [SocialmediasController::class, 'edit'])->where('socialmedia', '[0-9]+')->middleware('auth');
Route::get('/console/socialmedias/delete/{socialmedia:id}', [SocialmediasController::class, 'delete'])->where('socialmedia', '[0-9]+')->middleware('auth');

Route::get('/console/contactforms/list', [ContactformsController::class, 'list'])->middleware('auth');
Route::get('/console/contactforms/add', [ContactformsController::class, 'addForm'])->middleware('auth');
Route::post('/console/contactforms/add', [ContactformsController::class, 'add'])->middleware('auth');
Route::get('/console/contactforms/delete/{contactform:id}', [ContactformsController::class, 'delete'])->where('contactform', '[0-9]+')->middleware('auth');

