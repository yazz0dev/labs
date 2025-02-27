
mysql> insert into customer values(1001, 'arun' , 'mukkam' ,'calicut', 987654321);
Query OK, 1 row affected (0.12 sec)

mysql> insert into product values(1003, 'akil' , 'palazhi' ,'calicut');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
mysql> insert into customer(id,) values(1001, 'arun' , 'mukkam' ,'calicut');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') values(1001, 'arun' , 'mukkam' ,'calicut')' at line 1
mysql> desc customer;
+---------+-------------+------+-----+---------+-------+
| Field   | Type        | Null | Key | Default | Extra |
+---------+-------------+------+-----+---------+-------+
| id      | int         | NO   | PRI | NULL    |       |
| name    | varchar(20) | YES  |     | NULL    |       |
| address | varchar(10) | YES  |     | NULL    |       |
| city    | varchar(10) | YES  |     | NULL    |       |
| phno    | int         | YES  |     | NULL    |       |
+---------+-------------+------+-----+---------+-------+
5 rows in set (0.00 sec)

mysql> insert into customer(id,name,address,city) values(1001, 'ar
un' , 'mukka
ERROR 1062 (23000): Duplicate entry '1001' for key 'customer.PRIMARY'
mysql> insert into customer(id,name,address,city) values(1003, 'ak
il' , 'palazhi' ,'calicut', 980674251);
ERROR 1136 (21S01): Column count doesn't match value count at row 1
mysql> insert into customer(id,name,address,city) values(1003, 'akil' , 'palazhi' ,'calicut');
Query OK, 1 row affected (0.12 sec)

mysql> insert into customer values(1002, 'ajay' , 'ponoor' ,'calicut', 980694361);
Query OK, 1 row affected (0.16 sec)

mysql> insert into product values(1, 'pen' , 50);
Query OK, 1 row affected (0.08 sec)

mysql> insert into Invoice_item values(3, 'soap' , 80);
ERROR 1366 (HY000): Incorrect integer value: 'soap' for column 'pid' at row 1
mysql> insert into product values(2, 'pencil' , 100);
Query OK, 1 row affected (0.12 sec)

mysql> insert into product values(2, 'soap' , 110);
ERROR 1062 (23000): Duplicate entry '2' for key 'product.PRIMARY'
mysql> desc product;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| pid   | int         | NO   | PRI | NULL    |       |
| pname | varchar(20) | YES  |     | NULL    |       |
| price | int         | YES  |     | 0       |       |
+-------+-------------+------+-----+---------+-------+
3 rows in set (0.00 sec)

mysql> slect * from product;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'slect * from product' at line 1
mysql> select * from product;
+-----+--------+-------+
| pid | pname  | price |
+-----+--------+-------+
|   1 | pen    |    50 |
|   2 | pencil |   100 |
+-----+--------+-------+
2 rows in set (0.00 sec)

mysql> insert into Invoice_item values(3, 'soap' , 90);
ERROR 1366 (HY000): Incorrect integer value: 'soap' for column 'pid' at row 1
mysql> insert into product values(3, 'soap' , 120);
Query OK, 1 row affected (0.11 sec)

mysql> insert into Invoice_master values(101, 1001 , '2023-02-25');
Query OK, 1 row affected (0.11 sec)

mysql> insert into Invoice_master values(102, 1002 , '2024-03-15');
Query OK, 1 row affected (0.11 sec)

mysql> insert into Invoice_master values(103, 1003 , '2024-01-22');
Query OK, 1 row affected (0.56 sec)

mysql> insert into Invoice_master values(102, 1002 , '2024-01-22');
ERROR 1062 (23000): Duplicate entry '102' for key 'Invoice_master.PRIMARY'
mysql> desc Invoice_item;
+----------+------+------+-----+---------+-------+
| Field    | Type | Null | Key | Default | Extra |
+----------+------+------+-----+---------+-------+
| inv_id   | int  | YES  | MUL | NULL    |       |
| pid      | int  | YES  | MUL | NULL    |       |
| quantity | int  | YES  |     | NULL    |       |
+----------+------+------+-----+---------+-------+
3 rows in set (0.00 sec)

mysql> select * from Invoice_master;
+--------+---------+------------+
| inv_id | cust_id | inv_date   |
+--------+---------+------------+
|    101 |    1001 | 2023-02-25 |
|    102 |    1002 | 2024-03-15 |
|    103 |    1003 | 2024-01-22 |
+--------+---------+------------+
3 rows in set (0.00 sec)

mysql> insert into Invoice_item values(101, , '2024-01-22');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', '2024-01-22')' at line 1
mysql> select * from customer;
+------+------+---------+---------+-----------+
| id   | name | address | city    | phno      |
+------+------+---------+---------+-----------+
| 1001 | arun | mukkam  | calicut | 987654321 |
| 1002 | ajay | ponoor  | calicut | 980694361 |
| 1003 | akil | palazhi | calicut |      NULL |
+------+------+---------+---------+-----------+
3 rows in set (0.00 sec)

mysql> select * from Invoice_master;
+--------+---------+------------+
| inv_id | cust_id | inv_date   |
+--------+---------+------------+
|    101 |    1001 | 2023-02-25 |
|    102 |    1002 | 2024-03-15 |
|    103 |    1003 | 2024-01-22 |
+--------+---------+------------+
3 rows in set (0.00 sec)

mysql> insert into Invoice_item values(101, 1, 1);
Query OK, 1 row affected (0.13 sec)

mysql> insert into Invoice_item values(101, 2, 5);
Query OK, 1 row affected (0.16 sec)

mysql> insert into Invoice_item values(102, 3, 5);
Query OK, 1 row affected (0.65 sec)

mysql> insert into Invoice_item values(103, 1, 2);
Query OK, 1 row affected (0.13 sec)

mysql> select * from Invoice_item;
+--------+------+----------+
| inv_id | pid  | quantity |
+--------+------+----------+
|    101 |    1 |        1 |
|    101 |    2 |        5 |
|    102 |    3 |        5 |
|    103 |    1 |        2 |
+--------+------+----------+
4 rows in set (0.00 sec)

mysql> select * from Invoice_master;
+--------+---------+------------+
| inv_id | cust_id | inv_date   |
+--------+---------+------------+
|    101 |    1001 | 2023-02-25 |
|    102 |    1002 | 2024-03-15 |
|    103 |    1003 | 2024-01-22 |
+--------+---------+------------+
3 rows in set (0.00 sec)

mysql> select * from customer;
+------+------+---------+---------+-----------+
| id   | name | address | city    | phno      |
+------+------+---------+---------+-----------+
| 1001 | arun | mukkam  | calicut | 987654321 |
| 1002 | ajay | ponoor  | calicut | 980694361 |
| 1003 | akil | palazhi | calicut |      NULL |
+------+------+---------+---------+-----------+
3 rows in set (0.00 sec)

mysql> select * from product;
+-----+--------+-------+
| pid | pname  | price |
+-----+--------+-------+
|   1 | pen    |    50 |
|   2 | pencil |   100 |
|   3 | soap   |   120 |
+-----+--------+-------+
3 rows in set (0.00 sec)

mysql> update product set pen=89 where id=2;
ERROR 1054 (42S22): Unknown column 'id' in 'where clause'
mysql> update product set pen=89 where pid=2;
ERROR 1054 (42S22): Unknown column 'pen' in 'field list'
mysql> update product set price=89 where pid=2;
Query OK, 1 row affected (0.09 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update customer set city='calicut' where city=kozhikode;
ERROR 1054 (42S22): Unknown column 'kozhikode' in 'where clause'
mysql> update customer set city='calicut' where city='kozhikode';
Query OK, 0 rows affected (0.00 sec)
Rows matched: 0  Changed: 0  Warnings: 0

mysql> update product set price=89*1.02;
Query OK, 3 rows affected (0.12 sec)
Rows matched: 3  Changed: 3  Warnings: 0

mysql> select * from product;
+-----+--------+-------+
| pid | pname  | price |
+-----+--------+-------+
|   1 | pen    |    91 |
|   2 | pencil |    91 |
|   3 | soap   |    91 |
+-----+--------+-------+
3 rows in set (0.00 sec)

mysql> update product set price=50 where id=1 ;
ERROR 1054 (42S22): Unknown column 'id' in 'where clause'
mysql> update product set price=50 where pid=1;
Query OK, 1 row affected (0.10 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update product set price=150 where pid=2;
Query OK, 1 row affected (0.12 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update product set price=100 where pid=3;
Query OK, 1 row affected (0.52 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update product set price=price*1.02;
Query OK, 3 rows affected (0.08 sec)
Rows matched: 3  Changed: 3  Warnings: 0

mysql> select * from product;
+-----+--------+-------+
| pid | pname  | price |
+-----+--------+-------+
|   1 | pen    |    51 |
|   2 | pencil |   153 |
|   3 | soap   |   102 |
+-----+--------+-------+
3 rows in set (0.00 sec)
