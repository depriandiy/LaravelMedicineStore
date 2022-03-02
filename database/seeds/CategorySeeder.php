<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Analgesik Non Narkotik',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'Nyeri Neuropatik',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'Anestetik Lokal',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'Anestetik Umum dan Oksigen',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'Obat untuk Prosedur Pre Operatif',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'Antialergi dan Obat untuk Anafilaksis',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'Antelmintik',
            'description' => 'Antelmintik Intestinal'
        ]);

        DB::table('categories')->insert([
            'name' => 'Antibakteri',
            'description' => 'Beta Laktam'
        ]);

        DB::table('categories')->insert([
            'name' => 'Antiinfeksi Khusus',
            'description' => 'Antilepra'
        ]);

        DB::table('categories')->insert([
            'name' => 'Antiseptik Saluran Kemih',
            'description' => ''
        ]);
    }
}
