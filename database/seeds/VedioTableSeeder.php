<?php

use Illuminate\Database\Seeder;

class VedioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Vedio', 50)->create()->each(function($u) {
        $u->posts()->save(factory('App\Post')->make());
    });
    }
}
