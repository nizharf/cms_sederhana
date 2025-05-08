<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Basic routing
$request = $_SERVER['REQUEST_URI'];
$basePath = '/cms_sederhanaa/public';

// Remove base path from request
$request = str_replace($basePath, '', $request);

// Simple router
switch ($request) {
    case '/':
    case '':
        require __DIR__ . '/../app/views/dashboard.php';
        break;
    case '/login':
        require __DIR__ . '/../app/views/auth/login.php';
        break;
    case '/posts':
        require __DIR__ . '/../app/views/posts/index.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../app/views/404.php';
        break;
} 