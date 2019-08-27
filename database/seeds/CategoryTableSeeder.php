<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if (!DB::table('categories')->exists()) {
        DB::table('categories')->insert([
            'name' => 'Remeras'
        ]);
        DB::table('categories')->insert([
            'name' => 'Taza'
        ]);
        DB::table('categories')->insert([
            'name' => 'Bolsas'
        ]);
      }
    }
}
