<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $path = 'database/sql/northwind_data.sql';
        DB::unprepared(file_get_contents($path));

        // Model::unguard();
        // DB::statement('SET session_replication_role = \'replica\';');

        // $this->call([
        //     CustomersTableSeeder::class,
        //     EmployeesTableSeeder::class,
        //     InventoryTransactionTypesTableSeeder::class,
        //     OrderDetailsTableSeeder::class,
        //     OrderDetailsStatusTableSeeder::class,
        //     OrdersTableSeeder::class,
        //     InvoicesTableSeeder::class,
        //     OrdersTableSeeder::class,
        //     OrderDetailsTableSeeder::class,
        //     OrdersStatusTableSeeder::class,
        //     OrderDetailsTableSeeder::class,
        //     OrdersTaxStatusTableSeeder::class,
        //     PrivilegesTableSeeder::class,
        //     EmployeePrivilegesTableSeeder::class,
        //     ProductsTableSeeder::class,
        //     InventoryTransactionsTableSeeder::class,
        //     PurchaseOrderDetailsTableSeeder::class,
        //     PurchaseOrderStatusTableSeeder::class,
        //     PurchaseOrdersTableSeeder::class,
        //     SalesReportsTableSeeder::class,
        //     ShippersTableSeeder::class,
        //     StringsTableSeeder::class,
        //     SuppliersTableSeeder::class
        // ]);

        // DB::statement('SET session_replication_role = \'origin\';');
        // Model::reguard();
    }
}
