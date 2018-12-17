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
        DB::table('users')->insert([
            'name'=>'sinhvien',
            'username'=>'sinhvien123',
            'password'=>bcrypt('12345678'),
            'level'=>'1'
        ]);
    }
}
