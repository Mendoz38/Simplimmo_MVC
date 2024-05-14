<?php

/**
 * Autoload: loads automatically the required class files.
 * It looks into "Classes" and "Models" folders
 * 
 * @param string $className The name of the class to load
 */
function classLoader($className)
{
    // Build the file path from the class name
    $filePathClass = $className . '.php';

    // Create paths to "Classes", "Models",  "Repositories", ... folders
    $folderPathClasses = __DIR__ . '/Classes/';
    $folderPathModels = __DIR__ . '/Models/';
    $folderPathRepositories = __DIR__ . '/Repositories/';
    $folderPathControllers = __DIR__ . '/Controllers/';

    // Check if the class file exists in "Classes", include it if so
    if (file_exists($folderPathClasses . $filePathClass)) {
        require $folderPathClasses . $filePathClass;
    }

    // Check if the class file exists in "Models", include it if so
    if (file_exists($folderPathModels . $filePathClass)) {
        require $folderPathModels . $filePathClass;
    }

    // Check if the class file exists in "Repositories", include it if so
    if (file_exists($folderPathRepositories . $filePathClass)) {
        require $folderPathRepositories . $filePathClass;
    }

    // Check if the class file exists in "Controllers", include it if so
    if (file_exists($folderPathControllers . $filePathClass)) {
        require $folderPathControllers . $filePathClass;
    }
}

// Save 'classLoader' function as autoload 
// PHP will call this function each time a non loaded class is instanciated
spl_autoload_register('classLoader');

// Start a session
session_start();

// Create a new instance of the 'Database' class
$database = new Database();

// Call getDB() method from the Database class
$database->getDb();

// Import the router.php file to handle the app routing
require_once __DIR__ . "/router.php";
