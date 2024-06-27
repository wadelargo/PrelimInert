<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departments;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'College of Nursing',
                'head' => 'Bea Mae Dublas',
            ],
            [
                'name' => 'College of Arts, Sciences and Technology',
                'head' => 'Christine Anne Anosa',
            ],
            [
                'name' => 'College of Criminal Justice',
                'head' => 'John Carlo Rasonabe',
            ],
            [
                'name' => 'College of Accountancy and Business Management',
                'head' => 'Rhose Dinmar Adtoon',
            ],
            [
                'name' => 'CABM-Hospitality',
                'head' => 'Lyza Mae Argoncillo',
            ],
            [
                'name' => 'College of Education',
                'head' => 'Nestle Ann Lismoras',
            ],
        ];
        foreach($data as $d){
            Departments::create($d);
        }
    }
}
