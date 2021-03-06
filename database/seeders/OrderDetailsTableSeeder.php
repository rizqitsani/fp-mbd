<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('order_details')->delete();

        \DB::table('order_details')->insert(
            [
                0 =>
                [
                    'id' => 27,
                    'order_id' => 30,
                    'product_id' => 34,
                    'quantity' => '100.0000',
                    'unit_price' => '14.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 96,
                    'inventory_id' => 83,
                ],
                1 =>
                [
                    'id' => 28,
                    'order_id' => 30,
                    'product_id' => 80,
                    'quantity' => '30.0000',
                    'unit_price' => '3.5000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 63,
                ],
                2 =>
                [
                    'id' => 29,
                    'order_id' => 31,
                    'product_id' => 7,
                    'quantity' => '10.0000',
                    'unit_price' => '30.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 64,
                ],
                3 =>
                [
                    'id' => 30,
                    'order_id' => 31,
                    'product_id' => 51,
                    'quantity' => '10.0000',
                    'unit_price' => '53.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 65,
                ],
                4 =>
                [
                    'id' => 31,
                    'order_id' => 31,
                    'product_id' => 80,
                    'quantity' => '10.0000',
                    'unit_price' => '3.5000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 66,
                ],
                5 =>
                [
                    'id' => 32,
                    'order_id' => 32,
                    'product_id' => 1,
                    'quantity' => '15.0000',
                    'unit_price' => '18.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 67,
                ],
                6 =>
                [
                    'id' => 33,
                    'order_id' => 32,
                    'product_id' => 43,
                    'quantity' => '20.0000',
                    'unit_price' => '46.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 68,
                ],
                7 =>
                [
                    'id' => 34,
                    'order_id' => 33,
                    'product_id' => 19,
                    'quantity' => '30.0000',
                    'unit_price' => '9.2000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 97,
                    'inventory_id' => 81,
                ],
                8 =>
                [
                    'id' => 35,
                    'order_id' => 34,
                    'product_id' => 19,
                    'quantity' => '20.0000',
                    'unit_price' => '9.2000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 69,
                ],
                9 =>
                [
                    'id' => 36,
                    'order_id' => 35,
                    'product_id' => 48,
                    'quantity' => '10.0000',
                    'unit_price' => '12.7500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 70,
                ],
                10 =>
                [
                    'id' => 37,
                    'order_id' => 36,
                    'product_id' => 41,
                    'quantity' => '200.0000',
                    'unit_price' => '9.6500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 98,
                    'inventory_id' => 79,
                ],
                11 =>
                [
                    'id' => 38,
                    'order_id' => 37,
                    'product_id' => 8,
                    'quantity' => '17.0000',
                    'unit_price' => '40.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 71,
                ],
                12 =>
                [
                    'id' => 39,
                    'order_id' => 38,
                    'product_id' => 43,
                    'quantity' => '300.0000',
                    'unit_price' => '46.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 99,
                    'inventory_id' => 77,
                ],
                13 =>
                [
                    'id' => 40,
                    'order_id' => 39,
                    'product_id' => 48,
                    'quantity' => '100.0000',
                    'unit_price' => '12.7500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 100,
                    'inventory_id' => 75,
                ],
                14 =>
                [
                    'id' => 41,
                    'order_id' => 40,
                    'product_id' => 81,
                    'quantity' => '200.0000',
                    'unit_price' => '2.9900',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 101,
                    'inventory_id' => 73,
                ],
                15 =>
                [
                    'id' => 42,
                    'order_id' => 41,
                    'product_id' => 43,
                    'quantity' => '300.0000',
                    'unit_price' => '46.0000',
                    'discount' => 0,
                    'status_id' => 1,
                    'date_allocated' => null,
                    'purchase_order_id' => 102,
                    'inventory_id' => 104,
                ],
                16 =>
                [
                    'id' => 43,
                    'order_id' => 42,
                    'product_id' => 6,
                    'quantity' => '10.0000',
                    'unit_price' => '25.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 84,
                ],
                17 =>
                [
                    'id' => 44,
                    'order_id' => 42,
                    'product_id' => 4,
                    'quantity' => '10.0000',
                    'unit_price' => '22.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 85,
                ],
                18 =>
                [
                    'id' => 45,
                    'order_id' => 42,
                    'product_id' => 19,
                    'quantity' => '10.0000',
                    'unit_price' => '9.2000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 103,
                    'inventory_id' => 110,
                ],
                19 =>
                [
                    'id' => 46,
                    'order_id' => 43,
                    'product_id' => 80,
                    'quantity' => '20.0000',
                    'unit_price' => '3.5000',
                    'discount' => 0,
                    'status_id' => 1,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 86,
                ],
                20 =>
                [
                    'id' => 47,
                    'order_id' => 43,
                    'product_id' => 81,
                    'quantity' => '50.0000',
                    'unit_price' => '2.9900',
                    'discount' => 0,
                    'status_id' => 1,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 87,
                ],
                21 =>
                [
                    'id' => 48,
                    'order_id' => 44,
                    'product_id' => 1,
                    'quantity' => '25.0000',
                    'unit_price' => '18.0000',
                    'discount' => 0,
                    'status_id' => 1,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 88,
                ],
                22 =>
                [
                    'id' => 49,
                    'order_id' => 44,
                    'product_id' => 43,
                    'quantity' => '25.0000',
                    'unit_price' => '46.0000',
                    'discount' => 0,
                    'status_id' => 1,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 89,
                ],
                23 =>
                [
                    'id' => 50,
                    'order_id' => 44,
                    'product_id' => 81,
                    'quantity' => '25.0000',
                    'unit_price' => '2.9900',
                    'discount' => 0,
                    'status_id' => 1,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 90,
                ],
                24 =>
                [
                    'id' => 51,
                    'order_id' => 45,
                    'product_id' => 41,
                    'quantity' => '50.0000',
                    'unit_price' => '9.6500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 104,
                    'inventory_id' => 116,
                ],
                25 =>
                [
                    'id' => 52,
                    'order_id' => 45,
                    'product_id' => 40,
                    'quantity' => '50.0000',
                    'unit_price' => '18.4000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 91,
                ],
                26 =>
                [
                    'id' => 53,
                    'order_id' => 46,
                    'product_id' => 57,
                    'quantity' => '100.0000',
                    'unit_price' => '19.5000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 105,
                    'inventory_id' => 101,
                ],
                27 =>
                [
                    'id' => 54,
                    'order_id' => 46,
                    'product_id' => 72,
                    'quantity' => '50.0000',
                    'unit_price' => '34.8000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 106,
                    'inventory_id' => 114,
                ],
                28 =>
                [
                    'id' => 55,
                    'order_id' => 47,
                    'product_id' => 34,
                    'quantity' => '300.0000',
                    'unit_price' => '14.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 107,
                    'inventory_id' => 108,
                ],
                29 =>
                [
                    'id' => 56,
                    'order_id' => 48,
                    'product_id' => 8,
                    'quantity' => '25.0000',
                    'unit_price' => '40.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 108,
                    'inventory_id' => 106,
                ],
                30 =>
                [
                    'id' => 57,
                    'order_id' => 48,
                    'product_id' => 19,
                    'quantity' => '25.0000',
                    'unit_price' => '9.2000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 109,
                    'inventory_id' => 112,
                ],
                31 =>
                [
                    'id' => 59,
                    'order_id' => 50,
                    'product_id' => 21,
                    'quantity' => '20.0000',
                    'unit_price' => '10.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 92,
                ],
                32 =>
                [
                    'id' => 60,
                    'order_id' => 51,
                    'product_id' => 5,
                    'quantity' => '25.0000',
                    'unit_price' => '21.3500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 93,
                ],
                33 =>
                [
                    'id' => 61,
                    'order_id' => 51,
                    'product_id' => 41,
                    'quantity' => '30.0000',
                    'unit_price' => '9.6500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 94,
                ],
                34 =>
                [
                    'id' => 62,
                    'order_id' => 51,
                    'product_id' => 40,
                    'quantity' => '30.0000',
                    'unit_price' => '18.4000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 95,
                ],
                35 =>
                [
                    'id' => 66,
                    'order_id' => 56,
                    'product_id' => 48,
                    'quantity' => '10.0000',
                    'unit_price' => '12.7500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => 111,
                    'inventory_id' => 99,
                ],
                36 =>
                [
                    'id' => 67,
                    'order_id' => 55,
                    'product_id' => 34,
                    'quantity' => '87.0000',
                    'unit_price' => '14.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 117,
                ],
                37 =>
                [
                    'id' => 68,
                    'order_id' => 79,
                    'product_id' => 7,
                    'quantity' => '30.0000',
                    'unit_price' => '30.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 119,
                ],
                38 =>
                [
                    'id' => 69,
                    'order_id' => 79,
                    'product_id' => 51,
                    'quantity' => '30.0000',
                    'unit_price' => '53.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 118,
                ],
                39 =>
                [
                    'id' => 70,
                    'order_id' => 78,
                    'product_id' => 17,
                    'quantity' => '40.0000',
                    'unit_price' => '39.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 120,
                ],
                40 =>
                [
                    'id' => 71,
                    'order_id' => 77,
                    'product_id' => 6,
                    'quantity' => '90.0000',
                    'unit_price' => '25.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 121,
                ],
                41 =>
                [
                    'id' => 72,
                    'order_id' => 76,
                    'product_id' => 4,
                    'quantity' => '30.0000',
                    'unit_price' => '22.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 122,
                ],
                42 =>
                [
                    'id' => 73,
                    'order_id' => 75,
                    'product_id' => 48,
                    'quantity' => '40.0000',
                    'unit_price' => '12.7500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 123,
                ],
                43 =>
                [
                    'id' => 74,
                    'order_id' => 74,
                    'product_id' => 48,
                    'quantity' => '40.0000',
                    'unit_price' => '12.7500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 124,
                ],
                44 =>
                [
                    'id' => 75,
                    'order_id' => 73,
                    'product_id' => 41,
                    'quantity' => '10.0000',
                    'unit_price' => '9.6500',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 125,
                ],
                45 =>
                [
                    'id' => 76,
                    'order_id' => 72,
                    'product_id' => 43,
                    'quantity' => '5.0000',
                    'unit_price' => '46.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 126,
                ],
                46 =>
                [
                    'id' => 77,
                    'order_id' => 71,
                    'product_id' => 40,
                    'quantity' => '40.0000',
                    'unit_price' => '18.4000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 127,
                ],
                47 =>
                [
                    'id' => 78,
                    'order_id' => 70,
                    'product_id' => 8,
                    'quantity' => '20.0000',
                    'unit_price' => '40.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 128,
                ],
                48 =>
                [
                    'id' => 79,
                    'order_id' => 69,
                    'product_id' => 80,
                    'quantity' => '15.0000',
                    'unit_price' => '3.5000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 129,
                ],
                49 =>
                [
                    'id' => 80,
                    'order_id' => 67,
                    'product_id' => 74,
                    'quantity' => '20.0000',
                    'unit_price' => '10.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 130,
                ],
                50 =>
                [
                    'id' => 81,
                    'order_id' => 60,
                    'product_id' => 72,
                    'quantity' => '40.0000',
                    'unit_price' => '34.8000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 131,
                ],
                51 =>
                [
                    'id' => 82,
                    'order_id' => 63,
                    'product_id' => 3,
                    'quantity' => '50.0000',
                    'unit_price' => '10.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 132,
                ],
                52 =>
                [
                    'id' => 83,
                    'order_id' => 63,
                    'product_id' => 8,
                    'quantity' => '3.0000',
                    'unit_price' => '40.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 133,
                ],
                53 =>
                [
                    'id' => 84,
                    'order_id' => 58,
                    'product_id' => 20,
                    'quantity' => '40.0000',
                    'unit_price' => '81.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 134,
                ],
                54 =>
                [
                    'id' => 85,
                    'order_id' => 58,
                    'product_id' => 52,
                    'quantity' => '40.0000',
                    'unit_price' => '7.0000',
                    'discount' => 0,
                    'status_id' => 2,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 135,
                ],
                55 =>
                [
                    'id' => 86,
                    'order_id' => 80,
                    'product_id' => 56,
                    'quantity' => '10.0000',
                    'unit_price' => '38.0000',
                    'discount' => 0,
                    'status_id' => 1,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => 136,
                ],
                56 =>
                [
                    'id' => 90,
                    'order_id' => 81,
                    'product_id' => 81,
                    'quantity' => '0.0000',
                    'unit_price' => '2.9900',
                    'discount' => 0,
                    'status_id' => 5,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => null,
                ],
                57 =>
                [
                    'id' => 91,
                    'order_id' => 81,
                    'product_id' => 56,
                    'quantity' => '0.0000',
                    'unit_price' => '38.0000',
                    'discount' => 0,
                    'status_id' => 0,
                    'date_allocated' => null,
                    'purchase_order_id' => null,
                    'inventory_id' => null,
                ],
            ]
        );
    }
}
