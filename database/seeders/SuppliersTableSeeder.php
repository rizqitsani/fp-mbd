<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('suppliers')->delete();

        \DB::table('suppliers')->insert(
            [
                0 =>
                [
                    'id' => 1,
                    'company' => 'Supplier A',
                    'last_name' => 'Andersen',
                    'first_name' => 'Elizabeth A.',
                    'email_address' => null,
                    'job_title' => 'Sales Manager',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                1 =>
                [
                    'id' => 2,
                    'company' => 'Supplier B',
                    'last_name' => 'Weiler',
                    'first_name' => 'Cornelia',
                    'email_address' => null,
                    'job_title' => 'Sales Manager',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                2 =>
                [
                    'id' => 3,
                    'company' => 'Supplier C',
                    'last_name' => 'Kelley',
                    'first_name' => 'Madeleine',
                    'email_address' => null,
                    'job_title' => 'Sales Representative',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                3 =>
                [
                    'id' => 4,
                    'company' => 'Supplier D',
                    'last_name' => 'Sato',
                    'first_name' => 'Naoki',
                    'email_address' => null,
                    'job_title' => 'Marketing Manager',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                4 =>
                [
                    'id' => 5,
                    'company' => 'Supplier E',
                    'last_name' => 'Hernandez-Echevarria',
                    'first_name' => 'Amaya',
                    'email_address' => null,
                    'job_title' => 'Sales Manager',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                5 =>
                [
                    'id' => 6,
                    'company' => 'Supplier F',
                    'last_name' => 'Hayakawa',
                    'first_name' => 'Satomi',
                    'email_address' => null,
                    'job_title' => 'Marketing Assistant',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                6 =>
                [
                    'id' => 7,
                    'company' => 'Supplier G',
                    'last_name' => 'Glasson',
                    'first_name' => 'Stuart',
                    'email_address' => null,
                    'job_title' => 'Marketing Manager',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                7 =>
                [
                    'id' => 8,
                    'company' => 'Supplier H',
                    'last_name' => 'Dunton',
                    'first_name' => 'Bryn Paul',
                    'email_address' => null,
                    'job_title' => 'Sales Representative',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                8 =>
                [
                    'id' => 9,
                    'company' => 'Supplier I',
                    'last_name' => 'Sandberg',
                    'first_name' => 'Mikael',
                    'email_address' => null,
                    'job_title' => 'Sales Manager',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
                9 =>
                [
                    'id' => 10,
                    'company' => 'Supplier J',
                    'last_name' => 'Sousa',
                    'first_name' => 'Luis',
                    'email_address' => null,
                    'job_title' => 'Sales Manager',
                    'business_phone' => null,
                    'home_phone' => null,
                    'mobile_phone' => null,
                    'fax_number' => null,
                    'address' => null,
                    'city' => null,
                    'state_province' => null,
                    'zip_postal_code' => null,
                    'country_region' => null,
                    'web_page' => null,
                    'notes' => null,
                    'attachments' => '',
                ],
            ]
        );
    }
}
