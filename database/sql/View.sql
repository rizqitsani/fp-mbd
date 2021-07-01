--VIEW

CREATE VIEW CustomerOrders AS (
	select O.Customer_ID, O.Order_ID,
	SUM(D.Quantity * D.Unit_Price) AS Amount
	From Orders O, Order_Details D
	Where O.Order_ID = D.Order_ID
	Group BY O.Customer_ID, O.Order_ID)

SELECT customer_id, Max(amount) as maxamaount
from customerorders group by customer_id

CREATE VIEW employeesfromUSA as (
	Select *
	from employees
	where country = 'USA'
	group by employee_id)

SELECT * from employeesfromusa

CREATE VIEW customersfromUSA as (
	Select *
	from customers
	where country = 'USA'
	group by customer_id)

SELECT * from customersfromusa

CREATE VIEW categorieshasnull as (
	select * 
	from categories
	where not (categories is not null)
	group by category_id)

SELECT * from categorieshasnull

CREATE VIEW customershasnull as (
	select * 
	from customers
	where not (customers is not null)
	group by customer_id)

SELECT * from customershasnull

CREATE VIEW ordershasnull as (
	select * 
	from orders
	where not (orders is not null)
	group by order_id)

SELECT * from ordershasnull

CREATE VIEW productshasnull as (
	select * 
	from products
	where not (products is not null)
	group by product_id)

SELECT * from productshasnull

CREATE VIEW shippershasnull as (
	select * 
	from shippers
	where not (shippers is not null)
	group by shippre_id)

SELECT * from shippershasnull

CREATE VIEW suppliershasnull as (
	select * 
	from suppliers
	where not (suppliers is not null)
	group by supplier_id)

SELECT * from suppliershasnull

CREATE VIEW territorieshasnull as (
	select * 
	from territories
	where not (territories is not null)
	group by territory_id)

SELECT * from terriitorieshasnull