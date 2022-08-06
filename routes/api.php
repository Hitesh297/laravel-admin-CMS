<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Content;

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