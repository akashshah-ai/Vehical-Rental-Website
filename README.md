
# Vehicle Rentals – PHP & MySQL (Dockerized)

A simple Vehicle Rentals web application built with PHP, MySQL, HTML and CSS, running inside Docker containers.  
Features include user registration/login, browsing cars and bikes, booking flow, location map, and a payment UI.


## Requirements

- Docker
- Docker Compose

## How to Run

1. Clone or copy the project to your machine.
2. From the project root:


docker compose down -v # optional: clean previous containers/volumes
docker compose up -d # build and start services

3. Access the application:

- App:       http://localhost:8083  (or your mapped app port)
- phpMyAdmin: http://localhost:8082 (if enabled in docker-compose)

## Default Database Setup

The `init.sql` file creates the `car_rentals` database and tables:

- `users` (id, username, email, password)
- `carspage` (car listings)
- `bikespage` (bike listings)

A default admin user is inserted:

- Email: `admin`
- Password: `admin`  
(password stored as MD5 hash in the `password` column)

## Main Pages

- `index.php` / `firstpage.php` – Landing page with top-bar login.
- `register.php` – User registration.
- `login.php` – Login form and authentication.
- `afterloginhome.php` – Home page after successful login.
- `cars.php` – List and order available cars (reads from `carspage`).
- `bikes.php` – List and order available bikes (reads from `bikespage`).
- `map.php` – Shows hubs on Google Maps.
- `payment.php` / `confirm.php` – Payment UI and confirmation page.
- `aboutus.php`, `policy.php` – Static info pages.

## Configuration

Database connection is centralized in `app/config.php`:


$host = 'db';
$dbname = 'car_rentals';
$username = 'root';
$password = 'root';
host;dbname=$dbname", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

The PHP containers talk to MySQL using the Docker network hostname `db` (the `db` service defined in `docker-compose.yaml`).

## Notes

- Any schema or seed changes should be added to `init.sql`; then run:


docker compose down -v
docker compose up -d

to recreate the database.
- Cars and bikes listings use the `image` path stored in the DB pointing to files under `app/images/`.
