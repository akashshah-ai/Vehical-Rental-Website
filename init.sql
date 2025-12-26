CREATE DATABASE IF NOT EXISTS `car_rentals`;
USE `car_rentals`;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Cars table (sample data from documentation)
CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    image VARCHAR(255),
    price DECIMAL(10,2),
    discount INT
);

-- Bikes table
CREATE TABLE bikes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    image VARCHAR(255),
    price DECIMAL(10,2),
    discount INT
);

INSERT INTO cars (name, image, price, discount) VALUES
('Maruti Swift', 'images/swift.jpg', 1500.00, 10),
('Honda City', 'images/city.jpg', 2500.00, 15);

INSERT INTO bikes (name, image, price, discount) VALUES
('Royal Enfield Classic 350', 'images/re-classic.jpg', 800.00, 20),
('Yamaha FZ', 'images/fz.jpg', 500.00, 10);

CREATE DATABASE IF NOT EXISTS car_rentals;
USE car_rentals;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

CREATE DATABASE IF NOT EXISTS car_rentals;
USE car_rentals;

-- Users table
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, email, password) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');


-- Cars table
DROP TABLE IF EXISTS carspage;
CREATE TABLE carspage (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  image VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  discount INT DEFAULT 0
);

INSERT INTO carspage (name, image, price, discount) VALUES
('Honda City',                 'images/Honda-Civic-New-Exterior-90523.jpg', 2500.00, 10),
('Mahindra XUV300',            'images/Mahindra-XUV300-Exterior-144700.jpg', 2800.00, 8),
('Audi A8',                    'images/Audi-New-A8-L-Exterior-143579.jpg', 5500.00, 15),
('Audi Q3',                    'images/Audi-Q3-New-Right-Front-Three-Quarter-93447.jpg', 4200.00, 12),
('Ford Endeavour',             'images/Ford-Endeavour-Facelift-Exterior-144997.jpg', 3800.00, 10),
('Volvo S60',                  'images/Volvo-S60-New-Front-view-91131.jpg', 4000.00, 10),
('BMW X7',                     'images/BMW-X7-Left-Front-Three-Quarter-145764.jpg', 6500.00, 18),
('Nissan SUV Cover',           'images/2323.png', 3200.00, 5);

-- Bikes table
DROP TABLE IF EXISTS bikespage;
CREATE TABLE bikespage (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  image VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  discount INT DEFAULT 0
);

INSERT INTO bikespage (name, image, price, discount) VALUES
('Royal Enfield Classic 350',  'images/royalenfield-classic-350.jpg', 800.00, 15),
('Bajaj Pulsar NS',            'images/bajaj-pulsar-ns.jpg', 600.00, 10),
('TVS Apache 200',             'images/tvs-apache-200.jpg', 550.00, 8),
('Suzuki Access',              'images/suzuki-access.jpg', 400.00, 5),
('Honda Activa 5G',            'images/honda-activa-5g.jpg', 350.00, 5),
('Honda Dio',                  'images/honda-dio.jpg', 360.00, 5),
('Yamaha R15',                 'images/yamaha-r15.jpg', 700.00, 12);
