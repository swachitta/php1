QN 1) & QN 2) Create a database named GCES.Create the table.

C:\wamp\bin\mysql\mysql5.7.26\bin>mysql.exe -u root --password Enter password: Welcome to the MySQL monitor. Commands end with ; or \g. Your MySQL connection id is 3 Server version: 5.7.26 MySQL Community Server (GPL)

Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its affiliates. Other names may be trademarks of their respective owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> CREATE DATABASE GCES; Query OK, 1 row affected (0.09 sec)

mysql> USE GCES; Database changed mysql> CREATE TABLE student( -> id int PRIMARY KEY AUTO_INCREMENT UNIQUE, -> name varchar(30) NOT NULL, -> address varchar(30) NOT NULL, -> phone_number int NOT NULL, -> bio text -> ); Query OK, 0 rows affected (0.09 sec)

mysql> CREATE TABLE users( -> id int PRIMARY KEY AUTO_INCREMENT UNIQUE, -> user_name varchar(30) NOT NULL UNIQUE, -> password text NOT NULL, -> email varchar(30) NOT NULL UNIQUE -> ); Query OK, 0 rows affected (0.36 sec)

mysql> CREATE TABLE addresses( -> id int PRIMARY KEY AUTO_INCREMENT UNIQUE, -> user_id int NOT NULL UNIQUE, -> country varchar(30) NOT NULL, -> state varchar(30) , -> district varchar(30), -> address_1 varchar(30), -> address_2 varchar(30) -> ); Query OK, 0 rows affected (0.37 sec)

mysql> show tables; +----------------+ | Tables_in_gces | +----------------+ | addresses | | student | | users | +----------------+ 3 rows in set (0.06 sec)

QN 3) Rename 'student' table to 'students' and also add user_id column in the students table.

C:\wamp\bin\mysql\mysql5.7.26\bin>mysql.exe -u root --password Enter password: Welcome to the MySQL monitor. Commands end with ; or \g. Your MySQL connection id is 6 Server version: 5.7.26 MySQL Community Server (GPL)

Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its affiliates. Other names may be trademarks of their respective owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> USE GCES; Database changed mysql> show tables; +----------------+ | Tables_in_gces | +----------------+ | addresses | | student | | users | +----------------+ 3 rows in set (0.00 sec)

mysql> DESCRIBE student; +--------------+-------------+------+-----+---------+----------------+ | Field | Type | Null | Key | Default | Extra | +--------------+-------------+------+-----+---------+----------------+ | id | int(11) | NO | PRI | NULL | auto_increment | | name | varchar(30) | NO | | NULL | | | address | varchar(30) | NO | | NULL | | | phone_number | int(11) | NO | | NULL | | | bio | text | YES | | NULL | | +--------------+-------------+------+-----+---------+----------------+ 5 rows in set (0.00 sec)

mysql> RENAME TABLE student TO students; Query OK, 0 rows affected (0.00 sec)

mysql> show tables; +----------------+ | Tables_in_gces | +----------------+ | addresses | | students | | users | +----------------+ 3 rows in set (0.00 sec)

mysql> ALTER TABLE students -> ADD user_id int UNIQUE; Query OK, 0 rows affected (0.11 sec) Records: 0 Duplicates: 0 Warnings: 0

mysql> DESCRIBE students; +--------------+-------------+------+-----+---------+----------------+ | Field | Type | Null | Key | Default | Extra | +--------------+-------------+------+-----+---------+----------------+ | id | int(11) | NO | PRI | NULL | auto_increment | | name | varchar(30) | NO | | NULL | | | address | varchar(30) | NO | | NULL | | | phone_number | int(11) | NO | | NULL | | | bio | text | YES | | NULL | | | user_id | int(11) | YES | UNI | NULL | | +--------------+-------------+------+-----+---------+----------------+ 6 rows in set (0.00 sec)

QN 4) Add at least 5 data in all 3 tables.

C:\wamp\bin\mysql\mysql5.7.26\bin>mysql.exe -u root --password Enter password: Welcome to the MySQL monitor. Commands end with ; or \g. Your MySQL connection id is 10 Server version: 5.7.26 MySQL Community Server (GPL)

Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its affiliates. Other names may be trademarks of their respective owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> USE GCES; Database changed mysql> INSERT INTO students -> (name,address,phone_number,bio,user_id) -> VALUES -> ("RONAK","KATHMANDU",98273789,"I like music",25), -> ("Susan","LALITPUR",98192863,"I like Reading",26), -> ("Asim","POKHARA",98485834,"I like Sports",30), -> ("MANAN","BAGAR",987532,"I LIKE SWIMMING",35), -> ("SAJAN","HEMJA",987654,"I LIKE GAMING",40); Query OK, 5 rows affected (0.00 sec) Records: 2 Duplicates: 0 Warnings: 0

mysql> SELECT * FROM students; +----+-------+-----------+--------------+-----------------+---------+ | id | name | address | phone_number | bio | user_id | +----+-------+-----------+--------------+-----------------+---------+ | 1 | RONAK | KATHMANDU | 98273789 | I like music | 25 | | 2 | Susan | LALITPUR | 98192863 | I like Reading | 26 | | 3 | Asim | POKHARA | 98485834 | I like Sports | 30 | | 4 | MANAN | BAGAR | 987532 | I LIKE SWIMMING | 35 | | 5 | SAJAN | HEMJA | 987654 | I LIKE GAMING | 40 | +----+-------+-----------+--------------+-----------------+---------+ 5 rows in set (0.00 sec)

mysql> INSERT INTO users -> (user_name,password,email) -> VALUES -> ("biswa3","CLFA32","biswa3@gmail.com"), -> ("mazzy","dalle3","mazzy3@gmail.com"), -> ("maximus","asdfas","maxim45@gmail.com"), -> ("name33","asfdfe","name33@gmail.com"), -> ("tiger45","eqey","tiger45@gmail.com"); Query OK, 5 rows affected (0.00 sec) Records: 5 Duplicates: 0 Warnings: 0

mysql> INSERT INTO addresses -> (user_id,country,state,district,address_1,address_2) -> VALUES -> (20,"NEPAL","GANKDAKI","KASKI","BAGAR","NADIPUR"), -> (34,"ITALY","VENICE","SFD","VENICE_1","VENICE_2"), -> (46,"INDIA","MP","BASH","MP","DELHI"), -> (50,"CHINA","XIANG","BEJING","TOKYO","BEIJING"), -> (60,"NEPAL","LALITPUR","DD","KATHMANDU","POKHARA");

mysql> SELECT * FROM users; +----+-----------+----------+-------------------+ | id | user_name | password | email | +----+-----------+----------+-------------------+ | 1 | biswa3 | CLFA32 | biswa3@gmail.com | | 2 | mazzy | dalle3 | mazzy3@gmail.com | | 3 | maximus | asdfas | maxim45@gmail.com | | 4 | name33 | asfdfe | name33@gmail.com | | 5 | tiger45 | eqey | tiger45@gmail.com | +----+-----------+----------+-------------------+ 5 rows in set (0.00 sec)

mysql> SELECT * FROM addresses; +----+---------+---------+----------+----------+-----------+-----------+ | id | user_id | country | state | district | address_1 | address_2 | +----+---------+---------+----------+----------+-----------+-----------+ | 1 | 20 | NEPAL | GANKDAKI | KASKI | BAGAR | NADIPUR | | 2 | 34 | ITALY | VENICE | SFD | VENICE_1 | VENICE_2 | | 3 | 46 | INDIA | MP | BASH | MP | DELHI | | 4 | 50 | CHINA | XIANG | BEJING | TOKYO | BEIJING | | 5 | 60 | NEPAL | LALITPUR | DD | KATHMANDU | POKHARA | +----+---------+---------+----------+----------+-----------+-----------+ 5 rows in set (0.00 sec)

QN 5) Select all students whose name start from 'A'.

C:\wamp\bin\mysql\mysql5.7.26\bin>mysql.exe -u root --password Enter password: Welcome to the MySQL monitor. Commands end with ; or \g. Your MySQL connection id is 15 Server version: 5.7.26 MySQL Community Server (GPL)

Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its affiliates. Other names may be trademarks of their respective owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> USE GCES; Database changed mysql> SELECT * FROM students WHERE name like "A%"; +----+------+---------+--------------+---------------+---------+ | id | name | address | phone_number | bio | user_id | +----+------+---------+--------------+---------------+---------+ | 3 | Asim | POKHARA | 98485834 | I like Sports | 30 | +----+------+---------+--------------+---------------+---------+ 1 row in set (0.39 sec)

QN 6) Update student address.

C:\wamp\bin\mysql\mysql5.7.26\bin>mysql.exe -u root --password Enter password: Welcome to the MySQL monitor. Commands end with ; or \g. Your MySQL connection id is 17 Server version: 5.7.26 MySQL Community Server (GPL)

Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its affiliates. Other names may be trademarks of their respective owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> USE GCES; Database changed mysql> UPDATE students -> SET name="ASHISH",address="CHITWAN" -> -> WHERE name like "A%"; Query OK, 1 row affected (0.30 sec) Rows matched: 1 Changed: 1 Warnings: 0

mysql> SELECT * FROM students; +----+--------+-----------+--------------+-----------------+---------+ | id | name | address | phone_number | bio | user_id | +----+--------+-----------+--------------+-----------------+---------+ | 1 | RONAK | KATHMANDU | 98273789 | I like music | 25 | | 2 | Susan | LALITPUR | 98192863 | I like Reading | 26 | | 3 | ASHISH | CHITWAN | 98485834 | I like Sports | 30 | | 4 | MANAN | BAGAR | 987532 | I LIKE SWIMMING | 35 | | 5 | SAJAN | HEMJA | 987654 | I LIKE GAMING | 40 | +----+--------+-----------+--------------+-----------------+---------+ 5 rows in set (0.00 sec)

QN 7) Delete student record whose id is 1 and 2.

C:\wamp\bin\mysql\mysql5.7.26\bin>mysql.exe -u root --password Enter password: Welcome to the MySQL monitor. Commands end with ; or \g. Your MySQL connection id is 20 Server version: 5.7.26 MySQL Community Server (GPL)

Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its affiliates. Other names may be trademarks of their respective owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> USE GCES; Database changed mysql> SELECT * FROM students; +----+--------+-----------+--------------+-----------------+---------+ | id | name | address | phone_number | bio | user_id | +----+--------+-----------+--------------+-----------------+---------+ | 1 | RONAK | KATHMANDU | 98273789 | I like music | 25 | | 2 | Susan | LALITPUR | 98192863 | I like Reading | 26 | | 3 | ASHISH | CHITWAN | 98485834 | I like Sports | 30 | | 4 | MANAN | BAGAR | 987532 | I LIKE SWIMMING | 35 | | 5 | SAJAN | HEMJA | 987654 | I LIKE GAMING | 40 | +----+--------+-----------+--------------+-----------------+---------+ 5 rows in set (0.00 sec)

mysql> DELETE FROM students WHERE id=1; Query OK, 1 row affected (0.00 sec)

mysql> DELETE FROM students WHERE id=2; Query OK, 1 row affected (0.00 sec)

mysql> SELECT * FROM students; +----+--------+---------+--------------+-----------------+---------+ | id | name | address | phone_number | bio | user_id | +----+--------+---------+--------------+-----------------+---------+ | 3 | ASHISH | CHITWAN | 98485834 | I like Sports | 30 | | 4 | MANAN | BAGAR | 987532 | I LIKE SWIMMING | 35 | | 5 | SAJAN | HEMJA | 987654 | I LIKE GAMING | 40 | +----+--------+---------+--------------+-----------------+---------+ 3 rows in set (0.00 sec)
