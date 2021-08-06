<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'is_admin' => 1,
        'password' =>bcrypt('1234')
        ],
        [
        'name' => 'User',
        'email' => 'user@user.com',
        'is_admin' => 0,
        'password' =>bcrypt('1234')
        ]
        ];

        foreach($user as $key => $value){
          User::create($value);
        }
    }
}
