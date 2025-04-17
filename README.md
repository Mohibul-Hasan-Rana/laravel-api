
# Laravel Products & Categories API (Dockerized)

This is a simple Laravel REST API to manage **Products** and **Categories**, built with Docker for local development.

---

##  Features

- CRUD for **Products** (name, description, price, category_id)
- CRUD for **Categories** (name, description)
- RESTful API endpoints
- Dockerized (PHP + MySQL)

##  How to set up the project

- Clone the project, go to the project folder
- Run in the CMD `docker-compose exec app php artisan migrate`
- Run `docker-compose exec app php artisan db:seed`
- Run `docker-compose up --build -d `
- Go to this link `http://localhost:8000/api/products` or Check in Postman












