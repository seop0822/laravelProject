<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://bitly.kr/PiW4',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://bilder.buecher.de/produkte/49/49269/49269669z.jpg',
            'title' => 'Building Restful Web with php7',
            'description' => 'Start web with php',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bitly.kr/hv8JH',
            'title' => 'Python more easy',
            'description' => 'learn python with this book',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bitly.kr/zKJnZ',
            'title' => 'python for developer',
            'description' => 'python book for developer',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://bitly.kr/bTISv',
            'title' => '그림으로 배우는 java programming',
            'description' => 'This is java. cheer up',
            'price' => 20
        ]);
        $product->save();

    }
}
