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
        $products = new \App\Product([
            'imagePath' => 'https://media.koreus.com/201701/allez-faire-loutre.jpg',
            'title' => 'La loutre numéro 1',
            'description' => 'Une loutre - vraiment pas chere',
            'price' => 10
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'https://zoom.disneynature.fr/sites/default/files/styles/node__article__main_image__full/public/01427101.jpg?itok=PGIR2Vmn',
            'title' => 'La loutre numéro 2',
            'description' => 'Une loutre - pas chere',
            'price' => 20
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'https://www.parc-animalier-pyrenees.com/Fichiers/animaux/111641teteloutre-parcanimalierdespyrenees-argelesgazost.jpg',
            'title' => 'La loutre numéro 3',
            'description' => 'Une belle loutre - moyennement chere',
            'price' => 30
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'http://alpesdusud.alpes1.com/media/news/thumb/870x489_200909281479.jpg',
            'title' => 'La loutre numéro 4',
            'description' => 'Une très belle loutre - un peu chère',
            'price' => 40
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'http://wp.unil.ch/allezsavoir/files/2017/09/loutre_1_67.jpg',
            'title' => 'La loutre numéro 5',
            'description' => 'La plus belle loutre - très chère',
            'price' => 50
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => 'https://dailygeekshow.com/wp-content/uploads/2018/06/dangers-loutres-de-mer.jpg',
            'title' => 'La loutre numéro 6',
            'description' => 'Une belle loutre - pas cher',
            'price' => 60
        ]);
        $products->save();
    }
}
