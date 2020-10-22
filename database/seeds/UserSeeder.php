<?php

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
        $data = [
            [
                'lname' => 'Talatagod',
                'fname' =>  'Mark Jerome',
                'address' => 'Pangangan, Calape, Bohol',
                'phone' => '0965.375.9826',
                'email' => 'mj@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'James',
                'fname' => 'Lebron',
                'address' => 'Tubigon, Bohol',
                'phone' => '0938.176.2395',
                'email' => 'lebron@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Butler',
                'fname' => 'Jimmy',
                'address' => 'Talibon, Bohol',
                'phone' => '0974.891.4720',
                'email' => 'jimmy@email.com',
                'password' => bcrypt('password123')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
