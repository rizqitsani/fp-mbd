-- Procedure 1: Update units_on_order berdasar order_details

DROP PROCEDURE update_product_quantity(integer);

CREATE OR REPLACE PROCEDURE update_product_quantity(id integer)
LANGUAGE plpgsql
AS $procedure$
DECLARE order_number real;
BEGIN
    SELECT INTO order_number SUM(quantity)
    FROM order_details
    WHERE product_id = id;

    UPDATE products
    SET units_on_order = order_number
    WHERE product_id = id;
END;
$procedure$

CALL update_product_quantity(1);

SELECT * FROM products WHERE product_id = 1;

