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