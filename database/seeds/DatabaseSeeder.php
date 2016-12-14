<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CompanyNamesTableSeeder::class);
        $this->call(CompanyRegstryTableSeeder::class);
        $this->call(CompanyStakeHoldersTableSeeder::class);
        $this->call(CustomerFormTableSeeder::class);
    }
}
