mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| bussinessdb        |
| covid_system       |
| home               |
| information_schema |
| mydb               |
| mysql              |
| own                |
| performance_schema |
| phpmyadmin         |
| student            |
| test               |
+--------------------+
11 rows in set (0.00 sec)

mysql> use own;
Database changed
mysql> show tables;
Empty set (0.00 sec)

mysql> create table Login_details(
    -> id int auto_increment primary key,
    -> User_name varchar(200) not null,
    -> email varchar(60) not null unique,
    -> password varchar(255) not null
    -> );
Query OK, 0 rows affected (0.10 sec)

mysql> show tables;
+---------------+
| Tables_in_own |
+---------------+
| login_details |
+---------------+
1 row in set (0.00 sec)

mysql> desc login_details;
+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| id        | int(11)      | NO   | PRI | NULL    | auto_increment |
| User_name | varchar(200) | NO   |     | NULL    |                |
| email     | varchar(60)  | NO   | UNI | NULL    |                |
| password  | varchar(255) | NO   |     | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+
4 rows in set (0.12 sec)

mysql>
