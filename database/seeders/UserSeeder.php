<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                "name" => "Claude Myburgh",
                "email" =>   config('dashboard.admin.claude.email'),
                "password" => bcrypt(config('dashboard.admin.claude.password'))
            ],
            [
                "name" => "Hendry Ollewagen",
                "email" => config('dashboard.admin.hendry.email'),
                "password" => bcrypt(config('dashboard.admin.hendry.password'))
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
