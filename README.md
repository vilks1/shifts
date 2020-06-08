# Shifts

Shifts is a app which imports, deletes and searches shifts

## Setup commands

```bash

# run in host machine
cd docker
cp .env.mysql.example .env.mysql
cp .env.app.example .env.app
docker-compose up

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


## License
[MIT](https://choosealicense.com/licenses/mit/)
