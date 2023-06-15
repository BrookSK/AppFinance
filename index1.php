<?php
require __DIR__ . '/../vendor/autoload.php';

// Aqui você pode adicionar qualquer código adicional necessário para configurar seu aplicativo
function view($template, $data = [])
{
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/Views');
    $twig = new \Twig\Environment($loader);
    return $twig->render($template, $data);
}

// Exemplo de roteamento com o CoffeeCode Router
use CoffeeCode\Router\Router;

$router = new Router('https://brooksk.github.io/AppFinance');

// Defina suas rotas aqui
$router->namespace("App\Controllers");

// Exemplo de rota básica
$router->get("/", "HomeController:index");

$router->dispatch();

// Certifique-se de lidar com erros e exceções adequadamente
if ($router->error()) {
    echo "Erro: " . $router->error();
}
?>
