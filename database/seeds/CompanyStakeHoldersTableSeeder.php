<?php

use Illuminate\Database\Seeder;

class CompanyStakeHoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stake_holders')->delete();
        factory(App\stake_holders::class, 10)->create();
    }
}
