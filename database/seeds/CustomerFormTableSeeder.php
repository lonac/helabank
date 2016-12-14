<?php

use Illuminate\Database\Seeder;

class CustomerFormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loanform')->delete();
        factory(App\loanform::class,100)->create();
    }
}
