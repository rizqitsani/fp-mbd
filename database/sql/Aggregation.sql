-- Agregasi: produk terlaris dari setiap supplier
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

-- Set: supplier produk terbanyak
SELECT s.company_name, COUNT(*) AS total_products
FROM products p
	JOIN suppliers s ON s.supplier_id = p.supplier_id
GROUP BY p.supplier_id, s.company_name
HAVING COUNT(*) >= ALL (
	SELECT COUNT(*) AS total_products
	FROM products
	GROUP BY supplier_id
);