<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;
use App\Models\Skill;

class EducationAndSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Education
        $educations = [
            [
                'name' => 'SMKTI AIRLANGGA',
                'year' => '2025 - Sekarang',
                'desc' => 'edu_smkti_desc',
                'logo' => 'Screenshot 2026-03-18 020016.png'
            ],
            [
                'name' => 'MTsN MODEL SAMARINDA',
                'year' => '2021 - 2024',
                'desc' => 'edu_mtsn_desc',
                'logo' => 'Screenshot 2026-03-18 015959.png'
            ],
            [
                'name' => 'SD MUHAMMADIYAH 1',
                'year' => '2015 - 2021',
                'desc' => 'edu_sd_desc',
                'logo' => 'Screenshot 2026-03-18 015930.png'
            ],
            [
                'name' => 'TK HANDAYANI',
                'year' => '2013 - 2015',
                'desc' => 'edu_tk_desc',
                'logo' => 'Screenshot 2026-03-18 020149.png'
            ],
        ];

        foreach ($educations as $edu) {
            Education::updateOrCreate(['name' => $edu['name']], $edu);
        }

        // Seed Skills
        $skills = [
            [
                'category' => 'front-end',
                'name' => 'HTML',
                'icon' => 'fa-brands fa-html5 text-orange-500',
                'desc' => 'Struktur semantik web yang presisi.'
            ],
            [
                'category' => 'front-end',
                'name' => 'CSS',
                'icon' => 'fa-brands fa-css3-alt text-blue-500',
                'desc' => 'Desain visual antar muka yang menawan.'
            ],
            [
                'category' => 'front-end',
                'name' => 'Tailwind',
                'icon' => 'fa-solid fa-wind text-teal-400',
                'desc' => 'Styling efisien dengan gaya utility-first.'
            ],
            [
                'category' => 'front-end',
                'name' => 'JavaScript',
                'icon' => 'fa-brands fa-js text-yellow-500',
                'desc' => 'Menghidupkan interaktivitas yang dinamis.'
            ],
            [
                'category' => 'back-end',
                'name' => 'Laravel',
                'icon' => 'fa-brands fa-laravel text-red-500',
                'desc' => 'Arsitektur sistem server yang tangguh.'
            ],
            [
                'category' => 'back-end',
                'name' => 'MySQL',
                'icon' => 'fa-solid fa-database text-blue-500',
                'desc' => 'Manajemen data logikal skala besar.'
            ],
            [
                'category' => 'tools',
                'name' => 'Git',
                'icon' => 'fa-brands fa-git-alt text-orange-600',
                'desc' => 'Perlindungan riwayat kode sistematis.'
            ],
            [
                'category' => 'tools',
                'name' => 'GitHub',
                'icon' => 'fa-brands fa-github text-[#4b3621] dark:text-white',
                'desc' => 'Wadah kolaborasi pusat dalam cloud.'
            ],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(['name' => $skill['name']], $skill);
        }
    }
}
