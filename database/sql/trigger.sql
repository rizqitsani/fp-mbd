-- Trigger 1: Update units_on_order dan units_in_stock setiap ada order baru masuk

CREATE OR REPLACE FUNCTION update_product_quantity()
RETURNS TRIGGER
LANGUAGE plpgsql
AS $$
BEGIN
  UPDATE products
  SET
    units_on_order = units_on_order + new.quantity,
    units_in_stock = units_in_stock - new.quantity
  WHERE
    product_id = new.product_id;
  RETURN NEW;
END;
$$;

DROP TRIGGER IF EXISTS update_product_on_order ON "order_details";

CREATE TRIGGER update_product_on_order 
BEFORE INSERT ON "order_details"
FOR EACH ROW EXECUTE PROCEDURE update_product_quantity();

SELECT * FROM products WHERE product_id = 74;

INSERT INTO order_details VALUES (11077, 74, 18.00, 2, 0.00);

-- Trigger 2: Satu employee hanya bisa mengawasi 5 orang maksimal

CREATE OR REPLACE FUNCTION check_reports_to()
RETURNS TRIGGER
AS $$
DECLARE
  jumlah bigint;
BEGIN
  SELECT INTO jumlah COUNT(*) FROM employees 
  WHERE reports_to = new.reports_to;
  IF jumlah >= 5 THEN
  RAISE EXCEPTION 'Pegawai hanya bisa mengawasi maksimal 5 pegawai lainnya.';  
  END IF;
END;
$$
LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS maximum_reports_to ON "employees";

CREATE TRIGGER maximum_reports_to
AFTER INSERT OR UPDATE ON employees
FOR EACH ROW
EXECUTE FUNCTION check_reports_to();

SELECT COUNT(*)
FROM employees 
WHERE reports_to = 2;

INSERT INTO employees VALUES (10, 'Rizky', 'Valda', 'Sales Representative', 'Ms.', '1963-08-30', '1992-04-01', '722 Moss Bay Blvd.', 'Kirkland', 'WA', '98033', 'USA', '(206) 555-3412', '3355', '\x', 'Valda was hired as a sales associate in 1993 and promoted to sales representative in February 1994.', 2, 'http://accweb/emmployees/leverling.bmp');


-- Trigger 3: Cek apakah pemesanan melebihi stok

CREATE OR REPLACE FUNCTION check_quantity()
RETURNS TRIGGER AS $$
DECLARE
	cek boolean;
BEGIN
	SELECT units_in_stock < new.quantity 
	INTO cek
	FROM products
    JOIN order_details ON products.product_id = new.product_id;
	IF (cek) THEN
    RAISE EXCEPTION 'Produk tidak mencukupi.';
	END IF;
	RETURN NEW;
END
$$
LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS valid_quantity ON "order_details";

CREATE TRIGGER valid_quantity
AFTER INSERT OR UPDATE ON "order_details"
FOR EACH ROW EXECUTE FUNCTION check_quantity();

SELECT * FROM products WHERE product_id = 76;
INSERT INTO order_details VALUES (11077, 76, 18.00, 60, 0.00);
