<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$args) {
    echo '<pre>';
    var_dump(...$args);
    echo '</pre>';
}

spl_autoload_register(function ($class){
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});


use App\Router;

Router::addRoute('/', function () {
        $posts = [
            [
                'title' => 'World news 1',
                'published' => '16.09.2025',
                'author' => 'Kaspar',
                'body' => 'Some world news body 1'
            ],
            [
                'title' => 'World news 2',
                'published' => '15.09.2025',
                'author' => 'Martin',
                'body' => 'Some world news body 2'
            ],
            [
                'title' => 'World news 3',
                'published' => '14.09.2025',
                'author' => 'Pets',
                'body' => 'Some world news body 3'
            ],
            [
                'title' => 'World news 4',
                'published' => '13.09.2025',
                'author' => 'Kelly',
                'body' => 'Some world news body 4'
            ],
        ];
        include __DIR__ . '/../views/index.php';
});

Router::addRoute('/us', function () {
        $posts = [
            [
                'title' => 'U.S news 1',
                'published' => '16.09.2025',
                'author' => 'Kaspar',
                'body' => 'Some U.S news body 1'
            ],
            [
                'title' => 'U.S news 2',
                'published' => '15.09.2025',
                'author' => 'Martin',
                'body' => 'Some U.S news body 2'
            ],
            [
                'title' => 'U.S news 3',
                'published' => '14.09.2025',
                'author' => 'Pets',
                'body' => 'Some U.S news body 3'
            ],
            [
                'title' => 'U.S news 4',
                'published' => '13.09.2025',
                'author' => 'Kelly',
                'body' => 'Some U.S news body 4'
            ],
        ];
        include __DIR__ . '/../views/us.php';
});

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    call_user_func($match['action']);
} else {
    echo '<img src="https://http.cat/404">';
}
