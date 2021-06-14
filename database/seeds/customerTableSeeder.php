<?php

use Illuminate\Database\Seeder;

class customerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = factory(App\ModelCustomer::class, 50)->create();
    }
}
