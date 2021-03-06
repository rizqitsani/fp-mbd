<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->delete();

        \DB::table('products')->insert(
            [
                0 =>
                [
                    'supplier_ids' => '4',
                    'id' => 1,
                    'product_code' => 'NWTB-1',
                    'product_name' => 'Northwind Traders Chai',
                    'description' => null,
                    'standard_cost' => '13.5000',
                    'list_price' => '18.0000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '10 boxes x 20 bags',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Beverages',
                    'attachments' => '',
                ],
                1 =>
                [
                    'supplier_ids' => '10',
                    'id' => 3,
                    'product_code' => 'NWTCO-3',
                    'product_name' => 'Northwind Traders Syrup',
                    'description' => null,
                    'standard_cost' => '7.5000',
                    'list_price' => '10.0000',
                    'reorder_level' => 25,
                    'target_level' => 100,
                    'quantity_per_unit' => '12 - 550 ml bottles',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 25,
                    'category' => 'Condiments',
                    'attachments' => '',
                ],
                2 =>
                [
                    'supplier_ids' => '10',
                    'id' => 4,
                    'product_code' => 'NWTCO-4',
                    'product_name' => 'Northwind Traders Cajun Seasoning',
                    'description' => null,
                    'standard_cost' => '16.5000',
                    'list_price' => '22.0000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '48 - 6 oz jars',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Condiments',
                    'attachments' => '',
                ],
                3 =>
                [
                    'supplier_ids' => '10',
                    'id' => 5,
                    'product_code' => 'NWTO-5',
                    'product_name' => 'Northwind Traders Olive Oil',
                    'description' => null,
                    'standard_cost' => '16.0125',
                    'list_price' => '21.3500',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '36 boxes',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Oil',
                    'attachments' => '',
                ],
                4 =>
                [
                    'supplier_ids' => '2;6',
                    'id' => 6,
                    'product_code' => 'NWTJP-6',
                    'product_name' => 'Northwind Traders Boysenberry Spread',
                    'description' => null,
                    'standard_cost' => '18.7500',
                    'list_price' => '25.0000',
                    'reorder_level' => 25,
                    'target_level' => 100,
                    'quantity_per_unit' => '12 - 8 oz jars',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 25,
                    'category' => 'Jams, Preserves',
                    'attachments' => '',
                ],
                5 =>
                [
                    'supplier_ids' => '2',
                    'id' => 7,
                    'product_code' => 'NWTDFN-7',
                    'product_name' => 'Northwind Traders Dried Pears',
                    'description' => null,
                    'standard_cost' => '22.5000',
                    'list_price' => '30.0000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '12 - 1 lb pkgs.',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Dried Fruit & Nuts',
                    'attachments' => '',
                ],
                6 =>
                [
                    'supplier_ids' => '8',
                    'id' => 8,
                    'product_code' => 'NWTS-8',
                    'product_name' => 'Northwind Traders Curry Sauce',
                    'description' => null,
                    'standard_cost' => '30.0000',
                    'list_price' => '40.0000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '12 - 12 oz jars',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Sauces',
                    'attachments' => '',
                ],
                7 =>
                [
                    'supplier_ids' => '2;6',
                    'id' => 14,
                    'product_code' => 'NWTDFN-14',
                    'product_name' => 'Northwind Traders Walnuts',
                    'description' => null,
                    'standard_cost' => '17.4375',
                    'list_price' => '23.2500',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '40 - 100 g pkgs.',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Dried Fruit & Nuts',
                    'attachments' => '',
                ],
                8 =>
                [
                    'supplier_ids' => '6',
                    'id' => 17,
                    'product_code' => 'NWTCFV-17',
                    'product_name' => 'Northwind Traders Fruit Cocktail',
                    'description' => null,
                    'standard_cost' => '29.2500',
                    'list_price' => '39.0000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '15.25 OZ',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Canned Fruit & Vegetables',
                    'attachments' => '',
                ],
                9 =>
                [
                    'supplier_ids' => '1',
                    'id' => 19,
                    'product_code' => 'NWTBGM-19',
                    'product_name' => 'Northwind Traders Chocolate Biscuits Mix',
                    'description' => null,
                    'standard_cost' => '6.9000',
                    'list_price' => '9.2000',
                    'reorder_level' => 5,
                    'target_level' => 20,
                    'quantity_per_unit' => '10 boxes x 12 pieces',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 5,
                    'category' => 'Baked Goods & Mixes',
                    'attachments' => '',
                ],
                10 =>
                [
                    'supplier_ids' => '2;6',
                    'id' => 20,
                    'product_code' => 'NWTJP-6',
                    'product_name' => 'Northwind Traders Marmalade',
                    'description' => null,
                    'standard_cost' => '60.7500',
                    'list_price' => '81.0000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '30 gift boxes',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Jams, Preserves',
                    'attachments' => '',
                ],
                11 =>
                [
                    'supplier_ids' => '1',
                    'id' => 21,
                    'product_code' => 'NWTBGM-21',
                    'product_name' => 'Northwind Traders Scones',
                    'description' => null,
                    'standard_cost' => '7.5000',
                    'list_price' => '10.0000',
                    'reorder_level' => 5,
                    'target_level' => 20,
                    'quantity_per_unit' => '24 pkgs. x 4 pieces',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 5,
                    'category' => 'Baked Goods & Mixes',
                    'attachments' => '',
                ],
                12 =>
                [
                    'supplier_ids' => '4',
                    'id' => 34,
                    'product_code' => 'NWTB-34',
                    'product_name' => 'Northwind Traders Beer',
                    'description' => null,
                    'standard_cost' => '10.5000',
                    'list_price' => '14.0000',
                    'reorder_level' => 15,
                    'target_level' => 60,
                    'quantity_per_unit' => '24 - 12 oz bottles',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 15,
                    'category' => 'Beverages',
                    'attachments' => '',
                ],
                13 =>
                [
                    'supplier_ids' => '7',
                    'id' => 40,
                    'product_code' => 'NWTCM-40',
                    'product_name' => 'Northwind Traders Crab Meat',
                    'description' => null,
                    'standard_cost' => '13.8000',
                    'list_price' => '18.4000',
                    'reorder_level' => 30,
                    'target_level' => 120,
                    'quantity_per_unit' => '24 - 4 oz tins',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 30,
                    'category' => 'Canned Meat',
                    'attachments' => '',
                ],
                14 =>
                [
                    'supplier_ids' => '6',
                    'id' => 41,
                    'product_code' => 'NWTSO-41',
                    'product_name' => 'Northwind Traders Clam Chowder',
                    'description' => null,
                    'standard_cost' => '7.2375',
                    'list_price' => '9.6500',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '12 - 12 oz cans',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Soups',
                    'attachments' => '',
                ],
                15 =>
                [
                    'supplier_ids' => '3;4',
                    'id' => 43,
                    'product_code' => 'NWTB-43',
                    'product_name' => 'Northwind Traders Coffee',
                    'description' => null,
                    'standard_cost' => '34.5000',
                    'list_price' => '46.0000',
                    'reorder_level' => 25,
                    'target_level' => 100,
                    'quantity_per_unit' => '16 - 500 g tins',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 25,
                    'category' => 'Beverages',
                    'attachments' => '',
                ],
                16 =>
                [
                    'supplier_ids' => '10',
                    'id' => 48,
                    'product_code' => 'NWTCA-48',
                    'product_name' => 'Northwind Traders Chocolate',
                    'description' => null,
                    'standard_cost' => '9.5625',
                    'list_price' => '12.7500',
                    'reorder_level' => 25,
                    'target_level' => 100,
                    'quantity_per_unit' => '10 pkgs',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 25,
                    'category' => 'Candy',
                    'attachments' => '',
                ],
                17 =>
                [
                    'supplier_ids' => '2',
                    'id' => 51,
                    'product_code' => 'NWTDFN-51',
                    'product_name' => 'Northwind Traders Dried Apples',
                    'description' => null,
                    'standard_cost' => '39.7500',
                    'list_price' => '53.0000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '50 - 300 g pkgs.',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Dried Fruit & Nuts',
                    'attachments' => '',
                ],
                18 =>
                [
                    'supplier_ids' => '1',
                    'id' => 52,
                    'product_code' => 'NWTG-52',
                    'product_name' => 'Northwind Traders Long Grain Rice',
                    'description' => null,
                    'standard_cost' => '5.2500',
                    'list_price' => '7.0000',
                    'reorder_level' => 25,
                    'target_level' => 100,
                    'quantity_per_unit' => '16 - 2 kg boxes',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 25,
                    'category' => 'Grains',
                    'attachments' => '',
                ],
                19 =>
                [
                    'supplier_ids' => '1',
                    'id' => 56,
                    'product_code' => 'NWTP-56',
                    'product_name' => 'Northwind Traders Gnocchi',
                    'description' => null,
                    'standard_cost' => '28.5000',
                    'list_price' => '38.0000',
                    'reorder_level' => 30,
                    'target_level' => 120,
                    'quantity_per_unit' => '24 - 250 g pkgs.',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 30,
                    'category' => 'Pasta',
                    'attachments' => '',
                ],
                20 =>
                [
                    'supplier_ids' => '1',
                    'id' => 57,
                    'product_code' => 'NWTP-57',
                    'product_name' => 'Northwind Traders Ravioli',
                    'description' => null,
                    'standard_cost' => '14.6250',
                    'list_price' => '19.5000',
                    'reorder_level' => 20,
                    'target_level' => 80,
                    'quantity_per_unit' => '24 - 250 g pkgs.',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 20,
                    'category' => 'Pasta',
                    'attachments' => '',
                ],
                21 =>
                [
                    'supplier_ids' => '8',
                    'id' => 65,
                    'product_code' => 'NWTS-65',
                    'product_name' => 'Northwind Traders Hot Pepper Sauce',
                    'description' => null,
                    'standard_cost' => '15.7875',
                    'list_price' => '21.0500',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '32 - 8 oz bottles',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Sauces',
                    'attachments' => '',
                ],
                22 =>
                [
                    'supplier_ids' => '8',
                    'id' => 66,
                    'product_code' => 'NWTS-66',
                    'product_name' => 'Northwind Traders Tomato Sauce',
                    'description' => null,
                    'standard_cost' => '12.7500',
                    'list_price' => '17.0000',
                    'reorder_level' => 20,
                    'target_level' => 80,
                    'quantity_per_unit' => '24 - 8 oz jars',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 20,
                    'category' => 'Sauces',
                    'attachments' => '',
                ],
                23 =>
                [
                    'supplier_ids' => '5',
                    'id' => 72,
                    'product_code' => 'NWTD-72',
                    'product_name' => 'Northwind Traders Mozzarella',
                    'description' => null,
                    'standard_cost' => '26.1000',
                    'list_price' => '34.8000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '24 - 200 g pkgs.',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 10,
                    'category' => 'Dairy products',
                    'attachments' => '',
                ],
                24 =>
                [
                    'supplier_ids' => '2;6',
                    'id' => 74,
                    'product_code' => 'NWTDFN-74',
                    'product_name' => 'Northwind Traders Almonds',
                    'description' => null,
                    'standard_cost' => '7.5000',
                    'list_price' => '10.0000',
                    'reorder_level' => 5,
                    'target_level' => 20,
                    'quantity_per_unit' => '5 kg pkg.',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 5,
                    'category' => 'Dried Fruit & Nuts',
                    'attachments' => '',
                ],
                25 =>
                [
                    'supplier_ids' => '10',
                    'id' => 77,
                    'product_code' => 'NWTCO-77',
                    'product_name' => 'Northwind Traders Mustard',
                    'description' => null,
                    'standard_cost' => '9.7500',
                    'list_price' => '13.0000',
                    'reorder_level' => 15,
                    'target_level' => 60,
                    'quantity_per_unit' => '12 boxes',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 15,
                    'category' => 'Condiments',
                    'attachments' => '',
                ],
                26 =>
                [
                    'supplier_ids' => '2',
                    'id' => 80,
                    'product_code' => 'NWTDFN-80',
                    'product_name' => 'Northwind Traders Dried Plums',
                    'description' => null,
                    'standard_cost' => '3.0000',
                    'list_price' => '3.5000',
                    'reorder_level' => 50,
                    'target_level' => 75,
                    'quantity_per_unit' => '1 lb bag',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 25,
                    'category' => 'Dried Fruit & Nuts',
                    'attachments' => '',
                ],
                27 =>
                [
                    'supplier_ids' => '3',
                    'id' => 81,
                    'product_code' => 'NWTB-81',
                    'product_name' => 'Northwind Traders Green Tea',
                    'description' => null,
                    'standard_cost' => '2.0000',
                    'list_price' => '2.9900',
                    'reorder_level' => 100,
                    'target_level' => 125,
                    'quantity_per_unit' => '20 bags per box',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 25,
                    'category' => 'Beverages',
                    'attachments' => '',
                ],
                28 =>
                [
                    'supplier_ids' => '1',
                    'id' => 82,
                    'product_code' => 'NWTC-82',
                    'product_name' => 'Northwind Traders Granola',
                    'description' => null,
                    'standard_cost' => '2.0000',
                    'list_price' => '4.0000',
                    'reorder_level' => 20,
                    'target_level' => 100,
                    'quantity_per_unit' => null,
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Cereal',
                    'attachments' => '',
                ],
                29 =>
                [
                    'supplier_ids' => '9',
                    'id' => 83,
                    'product_code' => 'NWTCS-83',
                    'product_name' => 'Northwind Traders Potato Chips',
                    'description' => null,
                    'standard_cost' => '0.5000',
                    'list_price' => '1.8000',
                    'reorder_level' => 30,
                    'target_level' => 200,
                    'quantity_per_unit' => null,
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Chips, Snacks',
                    'attachments' => '',
                ],
                30 =>
                [
                    'supplier_ids' => '1',
                    'id' => 85,
                    'product_code' => 'NWTBGM-85',
                    'product_name' => 'Northwind Traders Brownie Mix',
                    'description' => null,
                    'standard_cost' => '9.0000',
                    'list_price' => '12.4900',
                    'reorder_level' => 10,
                    'target_level' => 20,
                    'quantity_per_unit' => '3 boxes',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 5,
                    'category' => 'Baked Goods & Mixes',
                    'attachments' => '',
                ],
                31 =>
                [
                    'supplier_ids' => '1',
                    'id' => 86,
                    'product_code' => 'NWTBGM-86',
                    'product_name' => 'Northwind Traders Cake Mix',
                    'description' => null,
                    'standard_cost' => '10.5000',
                    'list_price' => '15.9900',
                    'reorder_level' => 10,
                    'target_level' => 20,
                    'quantity_per_unit' => '4 boxes',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => 5,
                    'category' => 'Baked Goods & Mixes',
                    'attachments' => '',
                ],
                32 =>
                [
                    'supplier_ids' => '7',
                    'id' => 87,
                    'product_code' => 'NWTB-87',
                    'product_name' => 'Northwind Traders Tea',
                    'description' => null,
                    'standard_cost' => '2.0000',
                    'list_price' => '4.0000',
                    'reorder_level' => 20,
                    'target_level' => 50,
                    'quantity_per_unit' => '100 count per box',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Beverages',
                    'attachments' => '',
                ],
                33 =>
                [
                    'supplier_ids' => '6',
                    'id' => 88,
                    'product_code' => 'NWTCFV-88',
                    'product_name' => 'Northwind Traders Pears',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '1.3000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '15.25 OZ',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Fruit & Vegetables',
                    'attachments' => '',
                ],
                34 =>
                [
                    'supplier_ids' => '6',
                    'id' => 89,
                    'product_code' => 'NWTCFV-89',
                    'product_name' => 'Northwind Traders Peaches',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '1.5000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '15.25 OZ',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Fruit & Vegetables',
                    'attachments' => '',
                ],
                35 =>
                [
                    'supplier_ids' => '6',
                    'id' => 90,
                    'product_code' => 'NWTCFV-90',
                    'product_name' => 'Northwind Traders Pineapple',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '1.8000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '15.25 OZ',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Fruit & Vegetables',
                    'attachments' => '',
                ],
                36 =>
                [
                    'supplier_ids' => '6',
                    'id' => 91,
                    'product_code' => 'NWTCFV-91',
                    'product_name' => 'Northwind Traders Cherry Pie Filling',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '2.0000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '15.25 OZ',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Fruit & Vegetables',
                    'attachments' => '',
                ],
                37 =>
                [
                    'supplier_ids' => '6',
                    'id' => 92,
                    'product_code' => 'NWTCFV-92',
                    'product_name' => 'Northwind Traders Green Beans',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '1.2000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '14.5 OZ',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Fruit & Vegetables',
                    'attachments' => '',
                ],
                38 =>
                [
                    'supplier_ids' => '6',
                    'id' => 93,
                    'product_code' => 'NWTCFV-93',
                    'product_name' => 'Northwind Traders Corn',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '1.2000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '14.5 OZ',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Fruit & Vegetables',
                    'attachments' => '',
                ],
                39 =>
                [
                    'supplier_ids' => '6',
                    'id' => 94,
                    'product_code' => 'NWTCFV-94',
                    'product_name' => 'Northwind Traders Peas',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '1.5000',
                    'reorder_level' => 10,
                    'target_level' => 40,
                    'quantity_per_unit' => '14.5 OZ',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Fruit & Vegetables',
                    'attachments' => '',
                ],
                40 =>
                [
                    'supplier_ids' => '7',
                    'id' => 95,
                    'product_code' => 'NWTCM-95',
                    'product_name' => 'Northwind Traders Tuna Fish',
                    'description' => null,
                    'standard_cost' => '0.5000',
                    'list_price' => '2.0000',
                    'reorder_level' => 30,
                    'target_level' => 50,
                    'quantity_per_unit' => '5 oz',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Meat',
                    'attachments' => '',
                ],
                41 =>
                [
                    'supplier_ids' => '7',
                    'id' => 96,
                    'product_code' => 'NWTCM-96',
                    'product_name' => 'Northwind Traders Smoked Salmon',
                    'description' => null,
                    'standard_cost' => '2.0000',
                    'list_price' => '4.0000',
                    'reorder_level' => 30,
                    'target_level' => 50,
                    'quantity_per_unit' => '5 oz',
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Canned Meat',
                    'attachments' => '',
                ],
                42 =>
                [
                    'supplier_ids' => '1',
                    'id' => 97,
                    'product_code' => 'NWTC-82',
                    'product_name' => 'Northwind Traders Hot Cereal',
                    'description' => null,
                    'standard_cost' => '3.0000',
                    'list_price' => '5.0000',
                    'reorder_level' => 50,
                    'target_level' => 200,
                    'quantity_per_unit' => null,
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Cereal',
                    'attachments' => '',
                ],
                43 =>
                [
                    'supplier_ids' => '6',
                    'id' => 98,
                    'product_code' => 'NWTSO-98',
                    'product_name' => 'Northwind Traders Vegetable Soup',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '1.8900',
                    'reorder_level' => 100,
                    'target_level' => 200,
                    'quantity_per_unit' => null,
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Soups',
                    'attachments' => '',
                ],
                44 =>
                [
                    'supplier_ids' => '6',
                    'id' => 99,
                    'product_code' => 'NWTSO-99',
                    'product_name' => 'Northwind Traders Chicken Soup',
                    'description' => null,
                    'standard_cost' => '1.0000',
                    'list_price' => '1.9500',
                    'reorder_level' => 100,
                    'target_level' => 200,
                    'quantity_per_unit' => null,
                    'discontinued' => 0,
                    'minimum_reorder_quantity' => null,
                    'category' => 'Soups',
                    'attachments' => '',
                ],
            ]
        );
    }
}
