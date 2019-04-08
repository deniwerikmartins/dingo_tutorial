Terminal recomendado: PowerShell
#Setup

Para preparar o projeto clone o repositório em: https://github.com/deniwerikmartins/dingo_tutorial.git

Na raiz do projeto crie um arquivo `.env` com a seguinte configuração:

`APP_NAME=Laravel`

`APP_ENV=local`

`APP_KEY=base64:{APP_KEY}`

`APP_DEBUG=true`

`APP_LOG_LEVEL=debug`

`APP_URL=http://localhost`

`DB_CONNECTION=mysql`

`DB_HOST=mysql`

`DB_PORT=3306`

`DB_DATABASE=dingo_tutorial`

`DB_USERNAME=root`

`DB_PASSWORD=root`

`BROADCAST_DRIVER=log`

`CACHE_DRIVER=redis`

`SESSION_DRIVER=redis`

`SESSION_LIFETIME=120`

`QUEUE_DRIVER=sync`

`REDIS_HOST=redis`

`REDIS_PASSWORD=null`

`REDIS_PORT=6379`

`MAIL_DRIVER=smtp`

`MAIL_HOST=smtp.mailtrap.io`

`MAIL_PORT=2525`

`MAIL_USERNAME=null`

`MAIL_PASSWORD=null`

`MAIL_ENCRYPTION=null`

`PUSHER_APP_ID=`

`PUSHER_APP_KEY=`

`PUSHER_APP_SECRET=`

`PUSHER_APP_CLUSTER=mt1`

`OPENWEATHERMAP_APIKEY=82f4f58ba2d5f4ee6c13b4fee921c903`

`APIXU_APIKEY=31b315e6216344aea1132112190204`

`JWT_SECRET={JWT_SECRET}`

Obs: APP_KEY pode ser gerada com o comando no terminal: `php artisan key:generate`

Obs2: JWT_SECRET pode ser gerada com o comando no terminal: `php artisan jwt:secret`

Entre no diretório laradock, faça uma cópia do arquivo `env-example`, cole e o renomeie para `.env`

No diretório laradock/mysql edite o arquivo `my.cf`  e adicione a linha ao final de [mysqld]:

`default_authentication_plugin=mysql_native_password`

Execute o comando docker no terminal para iniciar os containers:

`docker-compose up -d nginx mysql phpmyadmin redis workspace`

No terminal vá até o diretório do projeto, entre no diretorio laradock e inicie o mysql no terminal com o comando:

`docker-compose exec mysql bash`

Entre na linha de comandos do mysql:

`mysql -u root -p`

Faça login como root (usuario e senha root)

Execute os comandos:

`ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';`

`ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';`

`ALTER USER 'default'@'%' IDENTIFIED WITH mysql_native_password BY 'secret';`


`` CREATE DATABASE IF NOT EXISTS `dingo_tutorial` COLLATE 'utf8_general_ci' ; ``

`` GRANT ALL ON `dingo_tutorial`.* TO 'root'@'%' ; ``

`FLUSH PRIVILEGES ;`

Execute o comando exit para sair do mysql e voltar para o bash, então execute os comandos:

`composer update`

`composer dump-autoload`

`php artisan jwt:secret`

`php artisan migrate`

`php artisan migrate --seed`

`php artisan vendor:publish --provider="Dingo\Api\Provider\LaravelServiceProvider"`


#Test

Inicialmente crie um arquivo `.env.testing` na raiz do projeto com a seguinte configuração

`APP_ENV=testing`

`APP_DEBUG=true`

`APP_KEY=base64:{APP_KEY}`  

`DB_CONNECTION=sqlite`

`DB_DATABASE=testing.sqlite`

`CACHE_DRIVER=file`

`QUEUE_DRIVER=sync`

`JWT_SECRET={JWT_SECRET}`


Obs: APP_KEY pode ser gerada com o comando: `php artisan key:generate`

Para executar os testes unitários, uma vez que iniciado o container workspace, inicie o bash com o comando:

`docker exec -it {CONTAINER_ID} bash`

Obs: CONTAINER_ID pode ser verificado com o comando `docker container ls` e usado somente os 3 primeiros caracteres,
exemplo: `docker exec -it c73 bash`

Execute o comando `php artisan test` 

#Run

---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_c6782d99ee8a3b8284a40dd5963b281d -->
## /api/status/ping
> Example request:

```bash
curl -X GET -G "http://localhost/api/status/ping" 
```

```javascript
const url = new URL("http://localhost/api/status/ping");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "",
    "data": null,
    "status_code": 200
}
```

### HTTP Request
`GET /api/status/ping`


<!-- END_c6782d99ee8a3b8284a40dd5963b281d -->

<!-- START_bc42578cdf9b64994335abfd8eb8d0ce -->
## /api/status/version
> Example request:

```bash
curl -X GET -G "http://localhost/api/status/version" 
```

```javascript
const url = new URL("http://localhost/api/status/version");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "",
    "data": "1.3.5",
    "status_code": 200
}
```

### HTTP Request
`GET /api/status/version`


<!-- END_bc42578cdf9b64994335abfd8eb8d0ce -->

<!-- START_ab8fae5a5a7e9d9fd9719629c9897bc3 -->

# Cidades disponivies para recursos de wheater da api:
`Paris`

`Washington`

`London`

## /api/weather/city/{city}/current
> Example request:

```bash
curl -X GET -G "http://localhost/api/weather/city/{city}/current" 
```

```javascript
const url = new URL("http://localhost/api/weather/city/{city}/current");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "city_id": 1,
        "city_name": "London",
        "temp_celsius": null,
        "status": "Haze",
        "measurement_time": "2019-04-07 22:57:22",
        "provider": "openweathermap.org",
        "created_at": {
            "date": "2019-04-07 22:58:54.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET /api/weather/city/{city}/current`


<!-- END_ab8fae5a5a7e9d9fd9719629c9897bc3 -->

<!-- START_91c5f25025f0aa28f35b24adc93c7474 -->
## /api/weather/city/{city}/all
> Example request:

```bash
curl -X GET -G "http://localhost/api/weather/city/{city}/all" 
```

```javascript
const url = new URL("http://localhost/api/weather/city/{city}/all");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "city_id": 1,
            "city_name": "London",
            "temp_celsius": null,
            "status": "Haze",
            "measurement_time": "2019-04-07 22:57:22",
            "provider": "openweathermap.org",
            "created_at": {
                "date": "2019-04-07 22:58:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "city_id": 1,
            "city_name": "London",
            "temp_celsius": null,
            "status": "Mist",
            "measurement_time": "2019-04-07 22:45:12",
            "provider": "apixu.com",
            "created_at": {
                "date": "2019-04-07 22:58:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET /api/weather/city/{city}/all`


<!-- END_91c5f25025f0aa28f35b24adc93c7474 -->

<!-- START_511eeadfce956cbeea74ce3763392dcd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Hollis Zemlak",
            "email": "princess84@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 2,
            "name": "Dr. Dashawn Hagenes Jr.",
            "email": "jadyn71@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 3,
            "name": "Wendell Rempel",
            "email": "alexane74@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 4,
            "name": "Alfonzo Barrows",
            "email": "bergstrom.laurence@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 5,
            "name": "Flavie Rempel",
            "email": "baron94@example.org",
            "roles": {
                "data": []
            }
        },
        {
            "id": 6,
            "name": "Michelle Greenfelder",
            "email": "rsauer@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 7,
            "name": "Ned Paucek",
            "email": "umcglynn@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 8,
            "name": "Ms. Celia Harris",
            "email": "junius.muller@example.org",
            "roles": {
                "data": []
            }
        },
        {
            "id": 9,
            "name": "Luther Wisoky",
            "email": "cruickshank.manuel@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 10,
            "name": "Mr. Guy Hoeger",
            "email": "zadams@example.net",
            "roles": {
                "data": []
            }
        }
    ],
    "meta": {
        "pagination": {
            "total": 54,
            "count": 10,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 6,
            "links": {
                "next": "http:\/\/localhost\/api\/users?page=2"
            },
            "from": 1
        }
    }
}
```

### HTTP Request
`GET /api/users`


<!-- END_511eeadfce956cbeea74ce3763392dcd -->

<!-- START_105ec9a65e7bc0a1aeccf3057b069abb -->
## Store a newly created resource in storage.

> Parametros necessários:

```Params
name {String}
password {String}
email {String}
```

> Example request:

```bash
curl -X POST "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST /api/users`


<!-- END_105ec9a65e7bc0a1aeccf3057b069abb -->

<!-- START_185d8dd11617f7199ad63b2137aa37fb -->
## Display the specified resource.

> Parametros necessários:

```Params
id {Int} User Id
```

> Example request:

```bash
curl -X GET -G "http://localhost/api/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Hollis Zemlak",
        "email": "princess84@example.com",
        "roles": {
            "data": []
        }
    }
}
```

### HTTP Request
`GET /api/users/{user}`


<!-- END_185d8dd11617f7199ad63b2137aa37fb -->

<!-- START_f274972870e4b957c00965c5d2c7e7bc -->
## Update the specified resource in storage.

> Parametros necessários:

```bash
name {String}
email {String}
password {String} [Opcional]
```

> Example request:

```bash
curl -X PUT "http://localhost/api/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT /api/users/{user}`

`PATCH /api/users/{user}`


<!-- END_f274972870e4b957c00965c5d2c7e7bc -->

<!-- START_ccafd5a881df2ccf542ad8b0709f6fb6 -->
## Remove the specified resource from storage.

> Parametros necessários:

```Parametros
id {Int} User id
```

> Example request:

```bash
curl -X DELETE "http://localhost/api/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE /api/users/{user}`


<!-- END_ccafd5a881df2ccf542ad8b0709f6fb6 -->

<!-- START_7ba029714012cd9c08cc50ae4dee9d7a -->
## /api/auth/login

> Parametros necessários:

```bash
email {String}
password {String}

```

> Example request:

```bash
curl -X POST "http://localhost/api/auth/login" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST /api/auth/login`


<!-- END_7ba029714012cd9c08cc50ae4dee9d7a -->

<!-- START_c5ab156ea210fb095d54ab41f7b95275 -->
## /api/auth/refresh
> Example request:

```bash
curl -X PATCH "http://localhost/api/auth/refresh" 
```

```javascript
const url = new URL("http://localhost/api/auth/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PATCH /api/auth/refresh`


<!-- END_c5ab156ea210fb095d54ab41f7b95275 -->

<!-- START_2dd587e2c4901bceb60e22e36836289f -->
## /api/auth/invalidate
> Example request:

```bash
curl -X DELETE "http://localhost/api/auth/invalidate" 
```

```javascript
const url = new URL("http://localhost/api/auth/invalidate");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE /api/auth/invalidate`


<!-- END_2dd587e2c4901bceb60e22e36836289f -->

<!-- START_e94e24496b4ec2effc15bcf93e8e068e -->
## /api/auth/register

> Parametros necessários:

```Parametros
name {String} User name
email {String} User e-mail
password {String} User password
```

> Example request:

```bash
curl -X POST "http://localhost/api/auth/register" 
```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST /api/auth/register`


<!-- END_e94e24496b4ec2effc15bcf93e8e068e -->

<!-- START_c687e1b0525abc7141677bd20ed6c30a -->
## /api/auth/user

> Parametros necessários:

```Parametros
token {String} Token de um User com Role root
```

> Example request:

```bash
curl -X GET -G "http://localhost/api/auth/user" 
```

```javascript
const url = new URL("http://localhost/api/auth/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 51,
        "name": "Heber Bogan",
        "email": "admin@example.com",
        "roles": {
            "data": [
                {
                    "name": "root"
                }
            ]
        }
    }
}
```

### HTTP Request
`GET /api/auth/user`


<!-- END_c687e1b0525abc7141677bd20ed6c30a -->


