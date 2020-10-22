<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Talatagod M. Regular Account',
                'init_invest' => 50000,
                'start_date' => '2020-11-23',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' =>  2,
                'acct_name' => 'James L. Regular Account',
                'init_invest' => 49000,
                'start_date' => '2020-10-05',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Butler J. Regular Account',
                'init_invest' => 350000,
                'start_date' => '2020-08-01',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}