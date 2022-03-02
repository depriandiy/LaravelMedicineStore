<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dibuat 3 3 secara manual
        DB::table('products')->insert([
            'generic_name' => 'Amoksisilin',
            'form' => 'tab 500 mg',
            'restriction_formula' => '10 hari',
            'description' => '-',
            'faskes_tk_1' => 'ya',
            'faskes_tk_2' => 'ya',
            'faskes_tk_3' => 'ya',
            'category_id' => 10
        ]);
        
        DB::table('products')->insert([
            'generic_name' => 'Benzatin Benzilpenisilin',
            'form' => 'inj 1,2 juta IU/mL (i.m.)',
            'restriction_formula' => '10 hari',
            'description' => '-',
            'faskes_tk_1' => 'ya',
            'faskes_tk_2' => 'ya',
            'faskes_tk_3' => 'ya',
            'category_id' => 10
        ]);
        
        DB::table('products')->insert([
            'generic_name' => 'Ampisilin',
            'form' => 'inj 250 mg (i.m./i.v.)',
            'restriction_formula' => '10 hari',
            'description' => '-',
            'faskes_tk_1' => 'ya',
            'faskes_tk_2' => 'ya',
            'faskes_tk_3' => 'ya',
            'category_id' => 10
        ]);
    }
}
