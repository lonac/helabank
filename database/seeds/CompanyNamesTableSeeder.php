<?php

use Illuminate\Database\Seeder;

class CompanyNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Company_name')->delete();
        factory(App\Company_name::class,20)->create();
    }
}
