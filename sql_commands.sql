create database dbName;
use dbName;

-- create signs table
create table signs (id int auto_increment primary key, title varchar(255) not null, body text not null, complete boolean);
show tables;
describe signs;
insert into signs (title, body, complete) values ('Next Exit', 'Follow the leader', false);
select * from signs;
select * from signs where id=1;


-- create admins table
CREATE TABLE admins (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  hashed_password VARCHAR(255) NOT NULL
);

ALTER TABLE admins ADD INDEX index_username (username);






-- instantiate new database and user for project

-- log in to mysql as root 
mysql -uroot -p

-- make db
create database two_wheels_good;

-- create a user and list existing users
create user staff;
select user from mysql.user;

-- give new user access to specific db
grant all privileges on two_wheels_good.*
to 'staff' @ 'localhost'
identified by 'password';

-- access database
use two_wheels_good;

-- make table bicycles 
create table bicycles (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  brand VARCHAR(255) NOT NULL,
  model VARCHAR(255) NOT NULL,
  year INT(4) NOT NULL,
  category VARCHAR(255) NOT NULL,
  gender VARCHAR(255) NOT NULL,
  color VARCHAR(255) NOT NULL,
  price DECIMAL(9,2) NOT NULL,
  weight_kg DECIMAL(9,5) NOT NULL,
  condition_id TINYINT(3) NOT NULL,
  description TEXT NOT NULL
);

-- insert test data into table db
INSERT INTO bicycles (brand, model, year, category, gender, color, price, weight_kg, condition_id, description) VALUES ('Mongoose', 'Slipback', '1983', 'Road', 'Unisex', 'Chrome', '800.00', '1.5', '5', '');

INSERT INTO bicycles (brand, model, year, category, gender, color, price, weight_kg, condition_id, description) VALUES ('Mongoose', 'Strider', '1983', 'Track', 'Unisex', 'Hotpink', '1100.00', '1.1', '4', '');

-- show table test data
show tables;
describe bicycles; (same as: show fields from bicycles;)
select * from bicycles\G;

-- delete table
drop table bicycles;

-- show all active users for given session
show processlist;
# terminate user session by id
kill #id;

-- show current user
select current_user();
select user();



select * from bicycles\G;




