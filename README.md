# Shifts

Shifts is a app which imports, deletes and searches shifts. This app is runs uses [Lumen](https://lumen.laravel.com/ "Lumen") to provide stateless API. 

## Prerequisites

* Docker

## Containers 
* Apache 2.4 + PHP 7.4.6
* MySQL 8.0.20
* adminer (for db management)

## Setup commands

```bash

# run in host machine
cd docker
cp .env.mysql.example .env.mysql
cp .env.app.example .env.app
docker-compose up

# start bash in app container
docker exec -it docker_shifts-app_1 /bin/bash

# run in shifts-app container
composer install
php artisan migrate

```

## Usage

Application runs on localhost and on port 40000.
```
http://localhost:40000
```
There is an api doc (lists out all API endpoints and has Postman collection for download):
```
http://localhost:40000/docs
```
Adminer app runs on localhost and on port 40001.
```
http://localhost:40001
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
