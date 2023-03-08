<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'user_id' => 1,
        ]);

        Customer::create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'user_id' => 1,
        ]);

        Customer::create([
            'name' => 'Bob Smith',
            'email' => 'bob.smith@example.com',
            'user_id' => 2,
        ]);
    }
}

