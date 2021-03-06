<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class UsersSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    $data = [
      [
        'name'       => 'Admin',
        'email'      => 'admin@admin.com',
        'password'   => 'admin',
        'img'        => 'default.jpg',
        'role_id'    => 1,
        'created_at' => Time::now(),
        'updated_at' => Time::now()
      ]
    ];

    // Simple Queries
    // $this->db->query(
    //   "INSERT INTO users (username, email) VALUES(:username:, :email:)",
    //   $data
    // );

    // Using Query Builder
    $this->db->table('users')->insertBatch($data);
  }
}
