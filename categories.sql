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