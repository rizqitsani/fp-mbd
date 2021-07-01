<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function set()
    {
        $result = DB::select('
            SELECT s.company_name, COUNT(*) AS total_products
            FROM products p
                JOIN suppliers s ON s.supplier_id = p.supplier_id
            GROUP BY p.supplier_id, s.company_name
            HAVING COUNT(*) >= ALL (
                SELECT COUNT(*) AS total_products
                FROM products
                GROUP BY supplier_id
            );
        ');

        return view('set', compact('result'));
        // return json_encode($result);
    }

    public function aggregation()
    {
        $result = DB::select('
            SELECT  s.company_name, COUNT (*) AS total_product_in_order
            FROM products p
                JOIN suppliers s ON s.supplier_id = p.supplier_id
                JOIN order_details o ON o.product_id = p.product_id
            GROUP BY p.supplier_id, s.company_name
            HAVING COUNT(*) = (
                SELECT MAX(total_product_in_order)
                FROM (
                    SELECT COUNT(*) AS total_product_in_order
                    FROM products p
                        JOIN suppliers s ON s.supplier_id = p.supplier_id
                        JOIN order_details o ON o.product_id = p.product_id
                    GROUP BY s.supplier_id
                ) AS t
            );
        ');

        return view('aggregation', compact('result'));
        // return json_encode($result);
    }
}
