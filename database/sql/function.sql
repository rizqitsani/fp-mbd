CREATE OR REPLACE FUNCTION fungsi_banding()
RETURN TRIGGER AS $$
DECLARE
	cek boolean;
BEGIN
	SELECT units_in_stock < NEW.quantity 
	INTO cek
	from products
	join order_details on products.product_id = NEW.product_id;
	IF (cek) then
	raise exception 'Produk tidak mencukupi.';
	end IF;
	return NEW;
end
$$
language plpgsql;

CREATE TRIGGER banding
AFTER INSERT or update on orders
for each row
execute function fungsi_banding()
-- Function 1: Mendapatkan total harga suatu order

DROP FUNCTION IF EXISTS get_total_price(_order_id smallint);

CREATE FUNCTION get_total_price(_order_id smallint)
RETURNS TABLE (total decimal(8, 2))
AS $func$
BEGIN 
  RETURN QUERY
  SELECT CAST(SUM((1 - o.discount) * o.unit_price * o.quantity) AS decimal(8, 2)) AS "total"
  FROM order_details o
  GROUP BY o.order_id
  HAVING o.order_id = _order_id;
END;
$func$
LANGUAGE plpgsql;

SELECT * FROM get_total_price(CAST(10251 AS smallint));

-- Function 2: Mendapatkan data pegawai yang akan pensiun pada tanggal tertentu (Umur > 60 tahun)

DROP FUNCTION IF EXISTS get_retired_employee(_year int);

CREATE OR REPLACE FUNCTION get_retired_employee(_year int)
RETURNS TABLE (first_name varchar(10), last_name varchar(20), birth_date date, age double precision)
LANGUAGE plpgsql
AS $$
BEGIN
	RETURN QUERY
  SELECT e.first_name, e.last_name, e.birth_date, _year - EXTRACT(YEAR FROM e.birth_date) as "age"
  FROM employees e
  WHERE _year - EXTRACT(YEAR FROM e.birth_date) > 60;
END;
$$

SELECT * FROM get_retired_employee(2010);

