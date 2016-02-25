-- Create a database
CREATE DATABASE dbli


-- Create a Table
CREATE TABLE TEST(
	id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	reg_date TIMESTAMP
)

-- Insert into a table
 INSERT INTO posts(firstname, lastname,email,comment) VALUES ('Mayra','Samaniego','mas686@mayra.com','Comment nm')

-- Update a fiel of a row in a table
UPDATE posts SET firstname="Lorena" WHERE id=1