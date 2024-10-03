<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customer::factory()
            ->count(25)
            ->hasInvoices(3)
            ->create();

        Customer::factory()
            ->count(105)
            ->hasInvoices(1)
            ->create();

        Customer::factory()
            ->count(75)
            ->hasInvoices(8)
            ->create();

        Customer::factory()
            ->count(5)
            ->hasInvoices(7)
            ->create();
                
    }
}
