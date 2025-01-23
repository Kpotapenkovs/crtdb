CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR (1000)
);

INSERT INTO posts (content)
VALUES 
("Pirmais bloga ieraksts"),
("Otrais bloga ieraksts"),
("kā pagatavot piccu");

SELECT * FROM posts;

USE blog_ipb23;

CREATE TABLE categories (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
category_name VARCHAR (25)
);

INSERT INTO categories (category_name)
VALUES 
("Mūzika"),
("Sports"),
("Svētki");

SELECT * FROM posts;