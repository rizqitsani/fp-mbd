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

SELECT * FROM products WHERE product_id = 1;

CALL update_product_quantity(1);

SELECT * FROM products WHERE product_id = 1;

-- Procedure 2: Membership discount untuk customer sudah order diatas 10 kali

-- DROP PROCEDURE IF EXISTS membership_discount();

-- CREATE OR REPLACE PROCEDURE membership_discount()
-- LANGUAGE plpgsql
-- AS $$
-- DECLARE 
--   ids char(5);
--   customer_ids CURSOR FOR SELECT c.customer_id FROM customers c;
-- BEGIN
-- 	OPEN customer_ids;
	
--   LOOP
-- 		FETCH customer_ids INTO ids;
-- 		RAISE NOTICE 'i want to print %', ids;
-- 	END LOOP;
  
--   CLOSE customer_ids;
-- END;
-- $$

-- CALL membership_discount();
