Create index Categoryname_index on categories(Category_name);

--company
Create index Companyname_index on customers(company_name);
Create index contactname_index on customers(contact_name);
Create index addresscustomer_index on customers(address);

--employee
Create index employeefname_index on employees(first_name);
Create index employeecity_index on employees(city);
Create index employeeregion_index on employees(region);

--orders
Create index orderdate_index on orders(order_date);
Create index shipname_index on orders(ship_name);
Create index shipcity_index on orders(ship_city);
Create index shipcountry_index on orders(ship_country);

--products
Create index productname_index on products(product_name);

--shipper
Create index companyname_index on orders(company_name);

--suppliers
Create index companyname_index on suppliers(company_name);
Create index contactname_index on suppliers(contact_name);
Create index supplierscity_index on suppliers(city);

--us_states
Create index statename_index on us_states(state_name);
