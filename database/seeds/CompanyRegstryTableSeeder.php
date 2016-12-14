<?php

use Illuminate\Database\Seeder;

class CompanyRegstryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        factory(App\companies::class, 100)->create();
    }
}
