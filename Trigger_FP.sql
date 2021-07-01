CREATE TRIGGER incr_count BEFORE UPDATE ON units_in_order
WHEN (order_id + 1) AND (product_id + 1)
FOR EACH ROW
DECLARE
	count INTEGER;
BEGIN
	count:=count + 1;
END