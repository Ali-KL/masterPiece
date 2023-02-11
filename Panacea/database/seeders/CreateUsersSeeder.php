<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
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
                // seeding normal user
                'firstName'=>'User',
                'lastName'=>'User',
                'age'=>'45',
                'email'=>'user@gmail.com',
                'phone'=>'0777777777',
                'role'=>0,
                'password'=>bcrypt(321321321)
            ],
            [
                // seeding recept
                'firstName'=>'Recept',
                'lastName'=>'Recept',
                'age'=>'30',
                'email'=>'recept@gmail.com',
                'phone'=>'0777777777',
                'role'=>1,
                'password'=>bcrypt(321321321)
            ],
            [
                // seeding doctor
                'firstName'=>'Doctor',
                'lastName'=>'Doctor',
                'age'=>'47',
                'email'=>'doctor@gmail.com',
                'phone'=>'0777777777',
                'role'=>2,
                'password'=>bcrypt(321321321)
            ],
            [
                // seeding pharma
                'firstName'=>'Pharma',
                'lastName'=>'Pharma',
                'age'=>'34',
                'email'=>'pharma@gmail.com',
                'phone'=>'0777777777',
                'role'=>3,
                'password'=>bcrypt(321321321)
            ],
            [
                // seeding admin
                'firstName'=>'Admin',
                'lastName'=>'Admin',
                'age'=>'40',
                'email'=>'admin@gmail.com',
                'phone'=>'0777777777',
                'role'=>4,
                'password'=>bcrypt(321321321)
            ]
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
