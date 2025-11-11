CREATE TABLE IF NOT EXISTS items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  price INT NOT NULL
);

INSERT INTO items (name, price) VALUES
('Coffee', 1200),
('Tea', 800),
('Cake', 600);

