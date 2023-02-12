<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "title" => "Nairobi", //1
                "category_id" => 8,
                "product_range" => "Sheer",
                "description" => "The Nairobi fabric boasts of its natural and one-of-a-kind texture and color variations, which gives a sense of purity to any interior space. Its generous width makes it perfect for larger windows and various other uses.",
                "excerpt" => "",
                "body" => "Nairobi fabric, with its natural and unique texture and color variations, provides a sense of purity within an interior space. Its ample width makes it ideal for larger windows and other applications"
            ],
            [
                "title" => "Waving Leave", //2
                "category_id" => 8,
                "product_range" => "Sheer",
                "description" => "The intricate and delicate leaves and flowers on printed and jacquard woven fabrics bring a sense of liveliness. The soft pastel colors used in the fabrics create a romantic and gentle atmosphere, exuding femininity.",
                "excerpt" => "",
                "body" => "The intricate and delicate leaves and flowers come to life on printed and jacquards woven fabrics that are in soft pastel colors, giving a romantic and gentle appeal that exudes femininity."
            ],
            [
                "title" => "Essential 3000 10%", //3
                "category_id" => 8,
                "product_range" => "Light Filtering",
                "description" => "Screen 3010 is a fabric made of polyester featuring a delicate 2 x 2 basket weave structure, that provides a subtle texture while still allowing for a clear view through.",
                "excerpt" => "",
                "body" => "Screen 3010 is a fabric made of polyester featuring a delicate 2 x 2 basket weave structure, that provides a subtle texture while still allowing for a clear view through."
            ],
            [
                "title" => "Essential 4000 5%", //4
                "category_id" => 8,
                "product_range" => "Light Filtering",
                "description" => "Screen 4005, made of polyester, has a delicate 2 x 2 basket weave structure that provides a subtle texture while allowing only 5% visibility, making it perfect for privacy needs",
                "excerpt" => "",
                "body" => "Screen 4005, made of polyester, has a delicate 2 x 2 basket weave structure that provides a subtle texture while allowing only 5% visibility, making it perfect for privacy needs"
            ],
            [
                "title" => "Mombassa", //5
                "category_id" => 8,
                "product_range" => "Light Filtering",
                "description" => "The Mombassa LF collection features a contemporary design and a tactile sensation. Its natural fabrics provide a cozy ambiance in any room, and the soft color scheme adds a touch of sophistication to the space.",
                "excerpt" => "",
                "body" => "The Mombassa LF collection features a contemporary design and a tactile sensation. Its natural fabrics provide a cozy ambiance in any room, and the soft color scheme adds a touch of sophistication to the space."
            ],
            [
                "title" => "Proto", //6
                "category_id" => 8,
                "product_range" => "Light Filtering",
                "description" => "The Prato collection features modern, light-filtering fabrics made from recycled yarns and available in a variety of popular colors. It gives an aesthetic look with an eco-friendly touch.",
                "excerpt" => "",
                "body" => "The Prato collection features modern, light-filtering fabrics made from recycled yarns and available in a variety of popular colors. It gives an aesthetic look with an eco-friendly touch."
            ],
            [
                "title" => "Berlin", //7
                "category_id" => 8,
                "product_range" => "Block-out",
                "description" => "The Berlin collection presents fabrics that completely block out daylight with a robust, durable textile appearance. The material provides complete darkness and privacy, and the collection is perfect for creating a cozy and secluded ambiance.",
                "excerpt" => "",
                "body" => "The Berlin collection presents fabrics that completely block out daylight with a robust, durable textile appearance. The material provides complete darkness and privacy, and the collection is perfect for creating a cozy and secluded ambiance."
            ],
            [
                "title" => "Mombassa", //8
                "category_id" => 8,
                "product_range" => "Block-out",
                "description" => "The Mombassa LF collection boasts of a modern aesthetic and a pleasant texture. The fabrics used are naturally delicate, which results in a warm and inviting atmosphere in any setting. The soft color palette adds a touch of elegance to the interior.",
                "excerpt" => "",
                "body" => "The Mombassa LF collection boasts of a modern aesthetic and a pleasant texture. The fabrics used are naturally delicate, which results in a warm and inviting atmosphere in any setting. The soft color palette adds a touch of elegance to the interior."
            ],
            [
                "title" => "Yamar", //9
                "category_id" => 8,
                "product_range" => "Block-out",
                "description" => "The Yamar collection features roller blind fabrics with a textured appearance, which adds a modern aesthetic. The collection comes in a range of neutral color tones.",
                "excerpt" => "",
                "body" => "The Yamar collection features roller blind fabrics with a textured appearance, which adds a modern aesthetic. The collection comes in a range of neutral color tones."
            ],
            [
                "title" => "Satin Flower", //10
                "category_id" => 8,
                "product_range" => "Block-out",
                "description" => "Printed and jacquard woven fabrics feature intricate leaf and flower designs that bring a sense of liveliness. The soft pastel colors used in the fabrics create a pure and gentle atmosphere in the interior.",
                "excerpt" => "",
                "body" => "Printed and jacquard woven fabrics feature intricate leaf and flower designs that bring a sense of liveliness. The soft pastel colors used in the fabrics create a pure and gentle atmosphere in the interior."
            ],
            [
                "title" => "Skyros", //10
                "category_id" => 10,
                "product_range" => "Zebra-Blinds",
                "description" => "The delicately woven structure and subtle satin gloss of these double roller fabrics brings a feeling of elegance to the interior.",
                "excerpt" => "",
                "body" => "The delicately woven structure and subtle satin gloss of these double roller fabrics brings a feeling of elegance to the interior."
            ],
            [
                "title" => "Zakynthos", //10
                "category_id" => 10,
                "product_range" => "Zebra-Blinds",
                "description" => "The refined silk-look texture of these double roller fabrics adds zest and makes the colors pop-out. The open weaving texture of the transparent stripes give the fabrics an o en feel.",
                "excerpt" => "",
                "body" => "The refined silk-look texture of these double roller fabrics adds zest and makes the colors pop-out. The open weaving texture of the transparent stripes give the fabrics an o en feel."
            ],
            [
                "title" => "Palma", //10
                "category_id" => 7,
                "product_range" => "Honeycomb",
                "description" => "Create a pure atmosphere with the delicate light filtering and block-out fabrics in this collection. The refined plain fabrics in the Palma collection are available in 25 mm and 45 mm.",
                "excerpt" => "",
                "body" => "Create a pure atmosphere with the delicate light filtering and block-out fabrics in this collection. The refined plain fabrics in the Palma collection are available in 25 mm and 45 mm."
            ],
        ];


        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
