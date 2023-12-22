<?php

require_once 'config/Database.php';
require_once 'config/config.php';
// Get the controller and action from the URL
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'book';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// Create the controller class name
$controllerClass = ucfirst($controller) . 'Controller';
// Instantiate the controller
$controllerFile = "controllers/$controllerClass.php";
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerInstance = new $controllerClass();
    $controllerInstance->$action();
    if(isset($_GET['message'])){
        echo "<script>alert('{$_GET['message']}')</script>";
    }
} else {
    echo "Controller not found.";
}
?>
<!-- <script>alert('')</script> -->