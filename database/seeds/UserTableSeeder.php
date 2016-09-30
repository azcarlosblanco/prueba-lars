<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class)->create([
        'name' => 'Admin',
        'email' => 'admin@lars.com',
        'password' => bcrypt('secret'),
        'role' => 'superadmin',
        'remember_token' => str_random(10),
      ]);
      factory(App\User::class, 100)->create();
    }
}
