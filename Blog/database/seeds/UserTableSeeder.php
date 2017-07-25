<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder{

  public function run()
  {
    User::create(
    [
      'name' => 'juan david',
      'email' => 'juan@gmail.com',
      'password' => \Hash::make('123456')
    ]);
  }

}

 ?>
