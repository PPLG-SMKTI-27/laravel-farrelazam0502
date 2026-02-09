<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
    //    $projects = Project::all();
       $projects = collect([]);
        $nama = 'Farrel';   
        $umur = "20 Tahun";

        return view('pages.Project',[
            'projects' => $projects,
            'nama' => $nama,
            'umur' => $umur
        ]);
        
    }
}


