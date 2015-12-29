<?php

namespace Laraviet\Admin\Seeders;

use Illuminate\Database\Seeder;
use Laraviet\Admin\Entities\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'email' => 'thanhcttsp@gmail.com',
            'password' => '123456',
        ]);

        $user->addRole(1);
    }
}
