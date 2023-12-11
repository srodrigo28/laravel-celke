
#### Criando o projeto
* Instalando Laravel Global com composer
```
composer global require laravel/installer
```
* 1 Criando projeto com composer
```
composer create-project laravel/laravel
```
* ou 2 Criando aplicação com laravel new app
```
laravel new app
```

* Criando aplicação com laravel new app
```
laravel new app
```

#### Rodando o projeto
* entrando na pasta e rodando primeiro comando
    * cd nomeDoProjeto
    * php artisan serve

#### Criando tabela
* php artisan make:migration create_contas_table
* php artisan migrate
#### Principais comandos
* 0. Atualizar dependencias ou depois que o projeto baixado
```
composer install
```
* 1. Controller
```
php artisan make:controller ContaController
```
* 2. Migration
```
php artisan migrate
```
* 3. Model
```
php artisan make:model Conta
```
* 4. Request
```
php artisan make:request ContaRequest
```


#### Outros comandos
* Gerando chave para env
```
php artisan key:generate`
```

#### Principais pastas
* Controller
* Model
* View
* Migrations
* Resources
* routes