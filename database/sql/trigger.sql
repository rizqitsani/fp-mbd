-- Update units_on_order dan units_in_stock setiap ada order baru masuk
CREATE OR REPLACE FUNCTION update_product_quantity()
RETURNS TRIGGER
LANGUAGE plpgsql
AS $$
BEGIN
  UPDATE products
  SET
    units_on_order = units_on_order + 1,
    units_in_stock = units_in_stock - 1
  WHERE
    product_id = new.product_id;
  RETURN NEW;
END;
$$;

DROP TRIGGER IF EXISTS update_product_on_order ON "order_details";

CREATE TRIGGER update_product_on_order 
BEFORE INSERT ON "order_details"
FOR EACH ROW EXECUTE PROCEDURE update_product_quantity();