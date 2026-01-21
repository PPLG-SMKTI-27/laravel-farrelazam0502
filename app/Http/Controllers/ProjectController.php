<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\views\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $nama = 'Farrel';   
        $umur = "20 Tahun";
        return view('pages.Portofolio',[
            'nama' => $nama,
            'umur' => $umur
        ]);
        
    }
}
