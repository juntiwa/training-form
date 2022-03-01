<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // $table->id();
      // $table->string('username');
      // $table->string('name')->nullable();
      // $table->string('lname')->nullable();
      // $table->string('email')->unique();
      // $table->timestamp('email_verified_at')->nullable();
      // $table->string('password');
      // $table->unsignedSmallInteger('permission');
      // $table->rememberToken();
      // $table->timestamps();

      $users = array(
         [
            'username' => 'juntima', 'name' => 'juntima', 'lname' => 'nuchyothin', 'email' => 'juntima.wa1711@gmail.com',
            'password' => Hash::make('123456789'), 'permission' => '1'
         ],
         [
            'username' => 'user', 'name' => 'user', 'lname' => 'test', 'email' => 'test@gmail.com',
            'password' => Hash::make('123456789'), 'permission' => '1'
         ],
      );

      foreach ($users as $user) {
         User::create($user);
      }
    }
}
