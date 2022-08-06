<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Content;
use App\Models\Experience;
use App\Models\Qualification;
use App\Models\Skill;
use App\Models\Socialmedia;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// http://127.0.0.1:8000/api/projects
Route::get('/projects', function(){

    $projects = Project::orderBy('id')->get();

    return $projects;

});
// http://127.0.0.1:8000/api/contents
Route::get('/contents', function(){

    $contents = Content::orderBy('id')->get();

    return $contents;

});
// http://127.0.0.1:8000/api/experiences
Route::get('/experiences', function(){

    $experiences = Experience::orderBy('id')->get();

    return $experiences;

});
// http://127.0.0.1:8000/api/qualifications
Route::get('/qualifications', function(){

    $qualifications = Qualification::orderBy('id')->get();

    return $qualifications;

});
// http://127.0.0.1:8000/api/skills
Route::get('/skills', function(){

    $Skills = Skill::orderBy('sequence')->get();

    return $Skills;

});
// http://127.0.0.1:8000/api/socialmedia
Route::get('/socialmedia', function(){

    $socialmedia = Socialmedia::orderBy('id')->get();

    return $socialmedia;

});
// http://127.0.0.1:8000/api/user
Route::get('/user', function(){

    $user = User::orderBy('id')->get();

    return $user;

});


