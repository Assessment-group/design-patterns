<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {

        return Project::select('id','title','description','company_name')->get();;

    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company_name' => 'required',
            'status' => 'required',
            'deadline' => 'required',
        ]);
        $project = Project::create([
            'title' => $validatedData['name'],
            'description' => $validatedData['description'],
            'company_name' => $validatedData['company_name'],
            'status' => $validatedData['status'],
            'deadline' => $validatedData['deadline'],
        ]);
        return response()->json('Project created!');

//        $project = new Project();
//        $project->title = $request->title;
//        $project->description = $request->description;
//        $project->company_name = $request->company_name;
//        $project->status = $request->status;
//        $project->deadline = $request->deadline;
//        $project->save();
//        return redirect('projects/show')->with('status', 'Project Has Been inserted');
    }

    public function show($id)
    {
        $projects = DB::table('projects')->get();

        return $projects->toJson();
    }

    public function status(Project $project)
    {
        $project->status = true;
        $project->update();

        return response()->json('Project updated!');
    }
}
