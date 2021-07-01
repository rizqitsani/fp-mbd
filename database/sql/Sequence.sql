
--Sequuence 

create sequence customers_seq
minvalue 1
maxvalue 99999
start with 92
increment by 1
cache 20

create sequence shippers_seq
minvalue 1
maxvalue 99
start with 7
increment by 1
cache 20

create sequence suppliers_seq
minvalue 1
maxvalue 999
start with 30
increment by 1
cache 20

create sequence products_seq
minvalue 1
maxvalue 999
start with 78
increment by 1
cache 20

create sequence orders_seq
minvalue 1
maxvalue 999999
start with 831
increment by 1
cache 20

create sequence employees_seq
minvalue 1
maxvalue 99
start with 10
increment by 1
cache 20