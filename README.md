
# Vehicle Rentals (PHP, MySQL, Docker, Kubernetes)

Containerized a legacy PHP/MySQL application and deployed it on Kubernetes by authoring Deployments, Services, PV/PVCs, ConfigMaps, and Secrets. Implemented MySQL data persistence and schema migration using init scripts, resulting in a scalable multi-pod architecture.


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


The PHP containers talk to MySQL using the Docker network hostname `db` (the `db` service defined in `docker-compose.yaml`).

## Notes

- Any schema or seed changes should be added to `init.sql`; then run:


docker compose down -v
docker compose up -d

to recreate the database.
- Cars and bikes listings use the `image` path stored in the DB pointing to files under `app/images/`.

--------------------------------------------------------------------------------------------------------

# Run Vehicle Rentals on Kubernetes

Clone the Vehicle Rentals project and deploy it to a Kubernetes cluster using the manifests in the `k8s/` folder.

## 1. Clone the repository

git clone https://github.com/akash00121/Vehical-Rental-Website.git
cd Vehical-Rental-Website

Make sure `k8s/app.yaml` contains a valid image that your cluster can pull, for example from Docker Hub or a local registry:

image: akash00121/vehicle-rentals-app:v1


## 2. Create the namespace

All Kubernetes objects for this app live in the `vehicle-rentals` namespace, defined in `k8s/namespace.yaml`. Create it first:

cd k8s
kubectl apply -f namespace.yaml
kubectl get ns vehicle-rentals

The namespace must exist before you apply the other manifests, otherwise you get “namespaces `vehicle-rentals` not found” errors.[web:59]

## 3. Apply all Kubernetes manifests

With the namespace in place, apply all remaining files in the `k8s` folder:

kubectl apply -f .

This will create:

- MySQL Secret + ConfigMap (`mysql-config.yaml`)
- MySQL init SQL ConfigMap (`mysql-init-configmap.yaml`)
- MySQL PV, PVC, Deployment, Service (`mysql.yaml`)
- PHP/Apache app Deployment + Service (`app.yaml`)

Check that everything is running:

kubectl get all -n vehicle-rentals

You should see `mysql` and `vehicle-rentals-app` pods in `Running` state, along with their Services.[web:59]

## 4. Access the application

The app Service is a `NodePort` on port `30080` (see `app.yaml`).[web:69]

- On a standard cluster:

http://<node-ip>:30080

- On Minikube:

minikube service vehicle-rentals-service -n vehicle-rentals --url


## 5. Clean up

To delete the app and its data:

kubectl delete namespace vehicle-rentals
kubectl delete pv mysql-pv   # if created by mysql.yaml

This removes the namespace (and all objects inside it) plus the manual PersistentVolume.
