<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function list()
    {
        return view('projects.list', [
            'projects' => Project::all()
        ]);
    }

    public function addForm()
    {
        return view('projects.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'gitUrl' => 'required|url',
            'liveUrl' => 'required|url',
            'technologies' => 'required',
            'sequence' => 'required',
        ]);

        $project = new Project();
        $project->title = $attributes['title'];
        $project->description = $attributes['description'];
        $project->gitUrl = $attributes['gitUrl'];
        $project->liveUrl = $attributes['liveUrl'];
        $project->technologies = $attributes['technologies'];
        $project->sequence = $attributes['sequence'];
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been added!');
    }

    public function editForm(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function edit(Project $project)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'gitUrl' => 'required|url',
            'liveUrl' => 'required|url',
            'technologies' => 'required',
            'sequence' => 'required',
        ]);

        $project->title = $attributes['title'];
        $project->description = $attributes['description'];
        $project->gitUrl = $attributes['gitUrl'];
        $project->liveUrl = $attributes['liveUrl'];
        $project->technologies = $attributes['technologies'];
        $project->sequence = $attributes['sequence'];
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been edited!');
    }

    public function delete(Project $project)
    {
        $project->delete();
        
        return redirect('/console/projects/list')
            ->with('message', 'Project has been deleted!');        
    }

    public function imageForm(Project $project)
    {
        return view('projects.image', [
            'project' => $project,
        ]);
    }

    public function image(Project $project)
    {

        $attributes = request()->validate([
            'photo' => 'required|url',
        ]);

        // Storage::delete($project->image);
        
        // $path = request()->file('image')->store('projects');

        $project->photo = $attributes['photo'];
        $project->save();
        
        return redirect('/console/projects/list')
            ->with('message', 'Project image has been edited!');
    }
}
