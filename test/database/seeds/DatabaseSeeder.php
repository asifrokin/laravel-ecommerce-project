<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         //$this->call(UsersTableSeeder::class);
         //$this->call(StudentsSeeder::class);
         $this->call(EmployeeSeeder::class);
         $this->call(EmployeeInfoSeeder::class);
        // $this->call(RoleSeeder::class);
    }
}
