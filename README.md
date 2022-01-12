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
Parâmetros do endereçamento de email no arquivo ```.env```
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=bananachatsystem@gmail.com
MAIL_PASSWORD=PASSWORD
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=bananachatsystem@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

Criar link para o storage
```php
php artisan storage:link
```

Por fim, limpe o cache das configurações
```php
php artisan config:cache
```

### Step Six
```php
php artisan serve
```
