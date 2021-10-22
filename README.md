# 💬BananaChat
Aplicação web de mensagens instantâneas

## Getting Start

### Step One
```git
git clone https://github.com/eduardamirelly/bananachat.git
```
### Step Two
Se não estiver com o laravel instalado:
```php
composer global require laravel/installer
```
Caso ocorrer algum erro relacionado ao ```php artisan serve```
```php
composer update
```
### Step Three
Instalação dos pacotes NodeJS:
```javacript
npm install
```
Instalação do Jetstream
```php
composer require laravel/jetstream
```
### Step Four
Parâmetros do banco de dados no arquivo ```.env```
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_bananachat
DB_USERNAME=root
DB_PASSWORD=
```
Migração das tabelas do projeto
```php
php artisan migrate
```
### Step Five
```php
php artisan serve
```
