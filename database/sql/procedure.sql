-- Procedure 1: Update units_on_order dan units_in_stock berdasar order_details

DROP PROCEDURE update_product_quantity(integer);

CREATE OR REPLACE PROCEDURE update_product_quantity(id integer)
LANGUAGE plpgsql
AS $$
BEGIN
  UPDATE products p
  SET
    units_on_order = units_on_order + 1,
    units_in_stock = units_in_stock - 1
  WHERE
    p.product_id = id;
END;
$$;

CALL update_product_quantity(1);