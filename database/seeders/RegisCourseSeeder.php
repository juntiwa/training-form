<?php

namespace Database\Seeders;

use App\Models\RegisCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //
      $regiscourses = array(
         ['user_id' => '1', 'course_id' => '1'],
         ['user_id' => '1', 'course_id' => '2'],
         ['user_id' => '2', 'course_id' => '2'],

      );

      foreach ($regiscourses as $regiscourse) {
         RegisCourse::create($regiscourse);
      }
    }
}
