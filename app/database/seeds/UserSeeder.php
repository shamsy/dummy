<?php

class UserSeeder extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "shams.larbi",
        "email"    => "shams@example.com",
        "password" => Hash::make("7h3¡MOST!53cu23")
      ]
    ];
  
    foreach ($users as $user) {
      User::create($user);
    }
  }
}
