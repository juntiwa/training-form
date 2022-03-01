<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   use HasFactory;

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
      'name_course',
      'name_place',
      'name_lecturer',
      'name_responsible',
      'date',
      'start_time',
      'end_time',
      'expenses',
      'payment',
      'number',
      'details',
      'note',
   ];

   /**
    * id table users
    * user_id table regis_course
    * กรณีที่ไม่ได้ตั้งชื่อ fk เป็นแบบตามกฎการตั้งชื่อของ laravel ให้ใส่ค่า
    * return $this->hasOne(RegisCourse::class,'fk','pk');
    */
   public function regiscourse()
   {
      return $this->hasOne(RegisCourse::class);
   }
}
