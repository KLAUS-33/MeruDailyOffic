<?php 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

use Attachee\Session\controllers\HomeController;
use Attachee\Session\models\User;
use Dotenv\Dotenv;


use sigawa\mvccore\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

try {
    $app = new Application(dirname(__DIR__),$config);
    
    // define your routes here
    $app->router->get('/home',[HomeController::class,'index']);
    $app->router->get('/',[HomeController::class,'index']);
    $app->router->get('/about',[HomeController::class,'about']);
    $app->router->get('/products',[HomeController::class,'products']);  
    $app->router->get('/contact',[HomeController::class,'contact']);
    $app->router->get('/blog',[HomeController::class,'blog']);
    $app->router->get('/blog/create',[HomeController::class,'create']);
   
    $app->run();
} catch (PDOException $e) {
    echo "Database connection error: Please try again later or contact support for help";
}

// try {
//     $app = new Application(dirname(__DIR__), $config);
//     Test database connection
//     $pdo = new PDO($_ENV['DB_DSN'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Database connection successful!";
// } catch (PDOException $e) {
//     echo "Database connection error: " . $e->getMessage();
// }
// try {
    
// } catch (PDOException $e) {
//     echo "Database connection error: " . $e->getMessage();
//     echo "<br>Available PDO drivers: ";
//     print_r(PDO::getAvailableDrivers());
// }

// Display PHP version and available PDO drivers
// echo "PHP Version: " . PHP_VERSION . "<br>";
// echo "Available PDO drivers: ";
// print_r(PDO::getAvailableDrivers());
// echo "<br>";
// try {
//     Your existing PDO connection code
//     $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=farmers;charset=utf8", "root", "");
//     echo "Database connection successful!";
// } catch (PDOException $e) {
//     echo "Database connection error: " . $e->getMessage();
// }
// ?>