<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class PrdouctsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => '',
                'price' => $i * 100,
                'category_id' => 1,
                'qty' => $i,
                'description' => '内容'
            ]);
        }
    }
}
