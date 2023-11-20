<?php

// Include necessary files
require_once 'controllers/UserController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/ProductTypeController.php';
require_once 'models/UserModel.php';

// Instantiate controllers and models
$userController = new UserController();
$productController = new ProductController();
$typeController = new ProductTypeController();
$userModel = new UserModel();

// Define routes
$routes = [
    'GET /users' => [$userController, 'getAllUsers'],
    'GET /users/{id}' => [$userController, 'getUserById'],
    // Add other routes as needed
];

$routes['GET /greeting'] = [$userController, 'getGreeting'];

$routes = [
    'GET /products' => [$productController, 'getAllProducts'],
    'GET /product/{id}' => [$productController, 'getProduct'],
    'POST /product' => [$productController, 'registerProduct'],
];

$routes = [
    'GET /type' => [$typeController, 'getAllTypes'],
    'POST /type' => [$typeController, 'registerType'],
];

// Route manager function
function handleRequest($method, $uri)
{
    global $routes;

    $routeKey = "$method $uri";

    if (array_key_exists($routeKey, $routes)) {
        $handler = $routes[$routeKey];
        call_user_func_array($handler, []);
    } else {
        // Handle 404 Not Found
        echo "404 Not Found";
    }
}

// Get the request method and URI
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Handle the request
handleRequest($method, $uri);
