DROP DATABASE IF EXISTS juranet;       -- Delete if it exists
CREATE DATABASE juranet;               -- Create a new database

use juranet;

CREATE TABLE users
(
  UserId int PRIMARY KEY AUTO_INCREMENT,
  Username varchar(255),
  Password varchar(255),
  Firstname varchar(255),
  Lastname varchar(255),
  HomeAddr varchar(255),
  Email varchar(255),
  Homephone varchar(255),
  Cellphone varchar(255)
);

CREATE TABLE products
(
  id int PRIMARY KEY AUTO_INCREMENT,
  title varchar(255),
  description varchar(255),
  price varchar(255),
  quantity int,
  img_link varchar(255)
);
