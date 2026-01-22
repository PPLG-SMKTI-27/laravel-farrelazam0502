<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\views\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $project = [
          ['project' => 'Website Cylc Rent Car', 'description' => 'Website penyewaan mobil berbasis web menggunakan native PHP dan MySQL'],
          ['project' => 'Website Portofolio', 'description' => 'Website data diri dan showcase project dibuat menggunakan Laravel'],
          ['project' => 'Aplikasi CRUD Siswa', 'description' => 'Aplikasi pengelolaan data siswa berbasis web'],
          ['project' => 'Sistem Login & Register', 'description' => 'Sistem autentikasi pengguna dengan fitur login, register, dan logout'],
          ['project' => 'Website Company Profile', 'description' => 'Website profil perusahaan dengan desain modern dan responsif'],
          ['project' => 'Landing Page Produk', 'description' => 'Landing page promosi produk dengan fokus UI/UX'],
          ['project' => 'Aplikasi Manajemen Barang', 'description' => 'Aplikasi pencatatan dan pengelolaan stok barang']
        ];
        $nama = 'Farrel';   
        $umur = "20 Tahun";

        return view('pages.Project',[
            'project' => $project,
            'nama' => $nama,
            'umur' => $umur
        ]);
        
    }
}
