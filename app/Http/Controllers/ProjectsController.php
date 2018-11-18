<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectsController extends Controller
{
    private $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function index()
    {
        $projects = $this->project->all();

        $data = [
            'projects' => $projects,
        ];

        return response()->json($data);
    }

    public function create()
    {
        $data = [

        ];

        return response()->json($data);
    }

    public function update()
    {
        $data = [

        ];

        return response()->json($data);
    }

    public function delete()
    {
        $data = [

        ];

        return response()->json($data);
    }
}
