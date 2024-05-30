Package được dùng:
1. Route: https://github.com/bramus/router
composer require bramus/router ~1.6
2. View: https://github.com/EFTEC/BladeOne
2. View: composer require eftec/bladeone
3. Model: https://github.com/doctrine/dbal/
3.1. Lệnh cài: composer require doctrine/dbal
3.2. Tài liệu sử dụng: https://www.doctrine-project.org/projects/doctrine-dbal/en/4.0/reference/introduction.html
4. .htaccess: Dùng của Laravel or Wordpress
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . index.php [L]

5. Validate: https://github.com/rakit/validation
composer require "rakit/validation"
6. ENV: https://github.com/vlucas/phpdotenv
 composer require vlucas/phpdotenv

// Route
{ 
    // Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
// ...

// Run it!
$router->run();
}

//ENV
{
    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();
}
BASE_URL=http://localhost/php-oop/duan/
DB_HOST= localhost
DB_PORT= 3306
DB_USERNAME= root
DB_PASSWORD= 
DB_NAME= php-oop
DB_DRIVER= pdo_mysql
