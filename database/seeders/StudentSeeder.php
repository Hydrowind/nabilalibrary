<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->create([
            'id' => '151524992',
            'fullname' => 'Ayunda Maudi',
            'class' => 'XI MIA 2',
            'phone_number' => '084625146642',
        ]);
        Student::factory()->create([
            'id' => '746251662',
            'fullname' => 'Herdhi Sandra',
            'class' => 'XI MIA 5',
            'phone_number' => '087465157742',
        ]);
        Student::factory()->create([
            'id' => '847261662',
            'fullname' => 'Daru Japa',
            'class' => 'XII IPS 1',
            'phone_number' => '084166288812',
        ]);
    }
}
