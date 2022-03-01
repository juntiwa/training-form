<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // $table->id();
      // $table->string('name_course');
      // $table->string('name_place');
      // $table->string('name_lecturer');
      // $table->string('name_responsible');
      // $table->date('date');
      // $table->time('start_time');
      // $table->time('end_time');
      // $table->string('expenses'); //free or amount 
      // $table->string('payment');
      // $table->string('number')->nullable();
      // $table->string('details')->nullable();
      // $table->string('note')->nullable();
      // $table->timestamps();

      $courses = array(
         [
            'name_course' => 'โรคเบาหวานเบื้องต้น', 'name_place' => 'ตึกอานันทมหิดล', 'name_lecturer' => 'นายสว่าง ไสว',
            'name_responsible' => 'นายสดชื่น สบายตา',
            'date' => '2022-02-28', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'expenses' => 'free',
            'payment' => 'Internet Banking', 'number' => '20'
         ],

         [
            'name_course' => 'การใช้งานเครื่องคอมพิวเตอร์เบื้องต้น', 'name_place' => 'ตึกพยาบาล', 'name_lecturer' => 'นายสว่าง ไสว',
            'name_responsible' => 'นางสาวสมหญิง ใจกล้า',
            'date' => '2022-03-01', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'expenses' => '250',
            'payment' => 'Internet Banking', 'number' => '50'
         ],
      );

      foreach ($courses as $course) {
         Course::create($course);
      }
    }
}
