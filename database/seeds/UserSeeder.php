<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class, 1)->states('first-admin')->create();
        factory(User::class, 1)->states('nhi-admin')->create();
        // factory(User::class, 1)->states('snipe-admin')->create();
        factory(User::class, 1)->states('superuser')->create();
        factory(User::class, 1)->states('admin')->create();
        factory(User::class, 1)->states('view-assets')->create();

    }
}
