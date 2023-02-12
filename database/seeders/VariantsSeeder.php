<?php

namespace Database\Seeders;

use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variants = [
        // Nairobi
          [
              "product_id" => 1,
              "sku" => "FR-NAIROBI-0150",
              "colour" => "White",
              "popular" => false,
          ],
          [
              "product_id" => 1,
              "sku" => "FR-NAIROBI-0200",
              "colour" => "Cinnamon",
              "popular" => false,
          ],
          [
              "product_id" => 1,
              "sku" => "FR-NAIROBI-0500",
              "colour" => "Concrete",
              "popular" => false,
          ],
          [
              "product_id" => 1,
              "sku" => "FR-NAIROBI-0600",
              "colour" => "Charcoal",
              "popular" => false,
          ],
        // Waving Leave
          [
              "product_id" => 2,
              "sku" => "RF-ES181491-0100",
              "colour" => "White",
              "popular" => false,
          ],
          [
              "product_id" => 2,
              "sku" => "RF-ES181491-0300",
              "colour" => "Green",
              "popular" => false,
          ],
          [
              "product_id" => 2,
              "sku" => "RF-ES181491-0500",
              "colour" => "Grey",
              "popular" => false,
          ],
          [
              "product_id" => 2,
              "sku" => "RF-ES181491-0600",
              "colour" => "Beige",
              "popular" => false,
          ],
        // Essential 3000 10%
          [
              "product_id" => 3,
              "sku" => "SCR-3010-01-250",
              "colour" => "Chalk",
              "popular" => false,
          ],
          [
              "product_id" => 3,
              "sku" => "SCR-3010-01-250-UNKNOWN",
              "colour" => "Super White",
              "popular" => false,
          ],
          [
              "product_id" => 3,
              "sku" => "SCR-3010-02-250",
              "colour" => "Chalk Beige Cream",
              "popular" => false,
          ],
          [
              "product_id" => 3,
              "sku" => "SCR-3010-11-250",
              "colour" => "Beige Pearl Gray",
              "popular" => false,
          ],
          [
              "product_id" => 3,
              "sku" => "SCR-3010-08-250",
              "colour" => "Soft Grey",
              "popular" => false,
          ],
          [
              "product_id" => 3,
              "sku" => "SCR-3010-05-250",
              "colour" => "Charcoal",
              "popular" => false,
          ],
          [
              "product_id" => 3,
              "sku" => "SCR-3010-10-250",
              "colour" => "Charcoal Dark Bronze",
              "popular" => false,
          ],
          [
              "product_id" => 3,
              "sku" => "SCR-3010-10-250-UNKOWN",
              "colour" => "Quantum Charcoal",
              "popular" => false,
          ],
          [
              "product_id" => 3,
              "sku" => "SCR-3010-06-250",
              "colour" => "Ebony",
              "popular" => false,
          ],

          // Essential 4000 5%
          [
              "product_id" => 4,
              "sku" => "SCR-4005-10-250",
              "colour" => "Chalk",
              "popular" => false,
          ],
          [
              "product_id" => 4,
              "sku" => "SCR-4005-03-250",
              "colour" => "Chalk Soft Grey",
              "popular" => false,
          ],
          [
              "product_id" => 4,
              "sku" => "SCR-4005-11-250",
              "colour" => "Beige Pearl Grey",
              "popular" => false,
          ],
          [
              "product_id" => 4,
              "sku" => "SCR-4005-08-250",
              "colour" => "Soft Grey",
              "popular" => false,
          ],
          [
              "product_id" => 4,
              "sku" => "SCR-4005-05-250",
              "colour" => "Charcoal",
              "popular" => false,
          ],
          [
              "product_id" => 4,
              "sku" => "SCR-4005-10-250",
              "colour" => "Charcoal Dark Bronze",
              "popular" => false,
          ],
          [
              "product_id" => 4,
              "sku" => "SCR-4005-06-250",
              "colour" => "Ebony",
              "popular" => false,
          ],

          // Mombassa light filter
          [
              "product_id" => 5,
              "sku" => "RF-MOMBASSA-0150",
              "colour" => "Snow",
              "popular" => false,
          ],
          [
              "product_id" => 5,
              "sku" => "RF-MOMBASSA-0100",
              "colour" => "Sand",
              "popular" => false,
          ],
          [
              "product_id" => 5,
              "sku" => "RF-MOMBASSA-0200",
              "colour" => "Oyster",
              "popular" => false,
          ],
          [
              "product_id" => 5,
              "sku" => "RF-MOMBASSA-0300",
              "colour" => "Dust",
              "popular" => false,
          ],
          [
              "product_id" => 5,
              "sku" => "RF-MOMBASSA-0500",
              "colour" => "Ash",
              "popular" => false,
          ],
          [
              "product_id" => 5,
              "sku" => "RF-MOMBASSA-0600",
              "colour" => "Grain",
              "popular" => false,
          ],
          [
              "product_id" => 5,
              "sku" => "RF-MOMBASSA-0400",
              "colour" => "Ink",
              "popular" => false,
          ],
            // Prato
          [
              "product_id" => 6,
              "sku" => "RF-PRATO-0100",
              "colour" => "White",
              "popular" => false,
          ],
          [
              "product_id" => 6,
              "sku" => "RF-PRATO-0200",
              "colour" => "Off-White",
              "popular" => false,
          ],
          [
              "product_id" => 6,
              "sku" => "RF-PRATO-0300",
              "colour" => "Sand",
              "popular" => false,
          ],
          [
              "product_id" => 6,
              "sku" => "RF-PRATO-0400",
              "colour" => "Dove",
              "popular" => false,
          ],
          [
              "product_id" => 6,
              "sku" => "RF-PRATO-0500",
              "colour" => "Raven",
              "popular" => false,
          ],
            // Berlin
          [
              "product_id" => 7,
              "sku" => "RF-BERLIN-5100",
              "colour" => "Blanc",
              "popular" => false,
          ],
          [
              "product_id" => 7,
              "sku" => "RF-BERLIN-5140",
              "colour" => "Twill",
              "popular" => false,
          ],
          [
              "product_id" => 7,
              "sku" => "RF-BERLIN-5610",
              "colour" => "Lime Stone",
              "popular" => false,
          ],
          [
              "product_id" => 7,
              "sku" => "RF-BERLIN-55919",
              "colour" => "Raven",
              "popular" => false,
          ],
          [
              "product_id" => 7,
              "sku" => "RF-BERLIN-6320",
              "colour" => "Black",
              "popular" => false,
          ],
            // Mombassa Block Out
          [
              "product_id" => 8,
              "sku" => "RF-MOMBASSA-5150",
              "colour" => "Snow",
              "popular" => false,
          ],
          [
              "product_id" => 8,
              "sku" => "RF-MOMBASSA-5200",
              "colour" => "Oyster",
              "popular" => false,
          ],
          [
              "product_id" => 8,
              "sku" => "RF-MOMBASSA-5100",
              "colour" => "Sand",
              "popular" => false,
          ],
          [
              "product_id" => 8,
              "sku" => "RF-MOMBASSA-5300",
              "colour" => "Dust",
              "popular" => false,
          ],
          [
              "product_id" => 8,
              "sku" => "RF-MOMBASSA-5400",
              "colour" => "Ink",
              "popular" => false,
          ],
          [
              "product_id" => 8,
              "sku" => "RF-MOMBASSA-5500",
              "colour" => "Ash",
              "popular" => false,
          ],
          [
              "product_id" => 8,
              "sku" => "RF-MOMBASSA-5500",
              "colour" => "Grain",
              "popular" => false,
          ],
        // Yamar
          [
              "product_id" => 9,
              "sku" => "",
              "colour" => "white",
              "popular" => false,
          ],
          [
              "product_id" => 9,
              "sku" => "",
              "colour" => "Cream",
              "popular" => false,
          ],
          [
              "product_id" => 9,
              "sku" => "",
              "colour" => "Ivory",
              "popular" => false,
          ],
          [
              "product_id" => 9,
              "sku" => "",
              "colour" => "Dune",
              "popular" => false,
          ],
          [
              "product_id" => 9,
              "sku" => "",
              "colour" => "Caramel",
              "popular" => false,
          ],
          [
              "product_id" => 9,
              "sku" => "",
              "colour" => "Light Grey",
              "popular" => false,
          ],
          [
              "product_id" => 9,
              "sku" => "",
              "colour" => "Dove Grey",
              "popular" => false,
          ],
          [
              "product_id" => 9,
              "sku" => "",
              "colour" => "Grey",
              "popular" => false,
          ],
            // Satin Flower
          [
              "product_id" => 10,
              "sku" => "RF-JA181510-5100",
              "colour" => "Rose",
              "popular" => false,
          ],
          [
              "product_id" => 10,
              "sku" => "RF-JA181510-5300",
              "colour" => "Blue",
              "popular" => false,
          ],



        ];

        foreach ($variants as $variant) {
            Variant::create($variant);
        }

    }
}
