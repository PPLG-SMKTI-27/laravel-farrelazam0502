<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Portfolio Website',
                'description' => 'Website portofolio pribadi untuk menampilkan project, skill, dan pengalaman secara profesional.',
                'technology' => 'Laravel, TailwindCSS, JavaScript',
                'demo_link' => 'https://portfolio-demo.com',
                'image' => 'portfolio.png',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Admin Dashboard',
                'description' => 'Aplikasi dashboard admin untuk mengelola data pengguna dan konten website.',
                'technology' => 'Laravel, MySQL, Alpine.js',
                'demo_link' => null,
                'image' => 'dashboard.png',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Landing Page Product',
                'description' => 'Landing page untuk mempromosikan produk digital dengan desain modern dan responsif.',
                'technology' => 'HTML, CSS, JavaScript',
                'demo_link' => 'https://landing-demo.com',
                'image' => null,
                'is_published' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}