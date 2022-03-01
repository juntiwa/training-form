<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   use HasApiTokens, HasFactory, Notifiable;

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
      'username',
      'email',
      'password',
      'permission',
   ];

   /**
    * The attributes that should be hidden for serialization.
    *
    * @var array<int, string>
    */
   protected $hidden = [
      'password',
      'remember_token',

   ];

   /**
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   /**
    * id table users
    * user_id table regis_course
    * กรณีที่ไม่ได้ตั้งชื่อ fk เป็นแบบตามกฎการตั้งชื่อของ laravel ให้ใส่ค่า
    * return $this->hasOne(RegisCourse::class,'fk','pk');
    */
   public function regiscourse()
   {
      return $this->hasMany(RegisCourse::class);
   }
}
