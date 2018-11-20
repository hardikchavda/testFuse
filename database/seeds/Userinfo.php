<?php

use Illuminate\Database\Seeder;

class Userinfo extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\userInfo::class, 5)->create();
    }

}
