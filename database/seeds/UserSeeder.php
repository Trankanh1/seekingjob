<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'fullname' => 'Tran Thi Kim Anh',
            'email' => 'kimanht79@gmail.com',
            'password' => md5('123456'),
        ]);
    }
}
