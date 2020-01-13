<?php

use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cards')->insert([
            'name' => 'Item 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '25',
            'qty' => '5',
        ]);

        DB::table('cards')->insert([
            'name' => 'Item 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '35',
            'qty' => '2',
        ]);

        DB::table('cards')->insert([
            'name' => 'Item 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '45',
            'qty' => '1',
        ]);

        DB::table('cards')->insert([
            'name' => 'Item 4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '55',
            'qty' => '8',
        ]);

        DB::table('cards')->insert([
            'name' => 'Item 5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '255',
            'qty' => '1',
        ]);

        DB::table('cards')->insert([
            'name' => 'Item 6',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'img' => 'df.png',
            'price' => '285',
            'qty' => '1',
        ]);
    }
}
