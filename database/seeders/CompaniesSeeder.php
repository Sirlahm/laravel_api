<?php

namespace Database\Seeders;


use App\Models\Company;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()
           ->count(5)
           ->hasEmployees(3)
           ->create();
           Company::factory()
           ->count(15)
           ->hasEmployees(7)
           ->create();
           Company::factory()
           ->count(50)
           ->hasEmployees(30)
           ->create();
    }
}
