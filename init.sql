CREATE DATABASE php_project;

CREATE TABLE php_project.users(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(200) NOT NULL,
  password VARCHAR(100) NOT NULL,
  hash VARCHAR(32) NOT NULL,
  name VARCHAR(32) NOT NULL,
  email VARCHAR(32) NOT NULL
);

CREATE TABLE php_project.products(
  id VARCHAR(300) PRIMARY KEY,
  name VARCHAR(200) NOT NULL,
  quantity INT NOT NULL DEFAULT 0,
  created_at timestamp default now()
);
