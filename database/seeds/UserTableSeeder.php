<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('admin1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
