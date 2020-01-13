<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'Item 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '25',
        ]);

        DB::table('items')->insert([
            'name' => 'Item 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '35',
        ]);

        DB::table('items')->insert([
            'name' => 'Item 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '45',
        ]);

        DB::table('items')->insert([
            'name' => 'Item 4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '55',
        ]);

        DB::table('items')->insert([
            'name' => 'Item 5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '255',
        ]);

        DB::table('items')->insert([
            'name' => 'Item 6',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '285',
        ]);
    }
}
