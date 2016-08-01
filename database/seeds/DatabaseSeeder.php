<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     * （运行数据库填充）
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users') -> insert([
        //         'username' => str_random(5).'·'.str_random(5),
        //         'email' => str_random(10).'@gmail.com',
        //         'password' => bcrypt('secret'),
        //     ]);
        Model::unguard();

            $this->call(UserTableSeeder::class);
            $this->call(VedioTableSeeder::class);


        Model::reguard();
    }
}
