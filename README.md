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

Adicionar as seguintes linhas de código no arquivo ```mail.php```
```php
'stream'=>[
    'ssl'=>[
        'allow_self_signed'=>true,
        'verify_peer'=>false,
        'verify_peer_name'=>false,
    ]
],
```

Descomentar a função em ```fortify.php```
```php
Features::emailVerification()
```

Descomentar as funções em ```jetstream.php```
```php
Features::termsAndPrivacyPolicy()
Features::profilePhotos()
```

Criar link para o storage
```php
php artisan storage:link
```

Fazer modificações no arquivo ```User.php```

ANTES
```php
class User extends Authenticatable
```

DEPOIS
```php
class User extends Authenticatable implements MustVerifyEmail
```

Por fim, limpe o cache das configurações
```php
php artisan config:cache
```

### Step Six
```php
php artisan serve
```
