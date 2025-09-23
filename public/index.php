<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}



// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

switch ($_SERVER['REQUEST_URI']) {
    case '/':
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
        break;
    case '/us':
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
        break;
    default:
        echo '404 page not found';
}
