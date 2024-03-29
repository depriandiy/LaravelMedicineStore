<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class); // sudah dibuat
        // $this->call(ProductSeeder::class); // sudah dibuat
        $this->call(MedicineSeeder::class); // sudah dibuat
    }
}
