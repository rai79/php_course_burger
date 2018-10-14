<?php
require_once ('../../vendor/autoload.php');
require_once ('login.php');

$data = [];

//Подключаемся к БД
try {
    $dsn = "mysql:host=$db_hostname;dbname=$db_database;charset=utf8";
    $pdo = new PDO($dsn, $db_user, $db_password);
    //Получаем список зарегистрированных пользователей
    $users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
    $data['users'] = $users;
    //Получаем список заказов
    $orders = $pdo->query('SELECT * FROM orders')->fetchAll(PDO::FETCH_ASSOC);
    $data['orders'] = $orders;
    //Загружаем шаблон
    $loader = new \Twig_Loader_Filesystem(getcwd().'\template');
    $twig = new Twig_Environment($loader);
    echo    $twig->render("admin.html", array('data' => $data));

} catch (PDOException $e) {
    echo $e->getMessage();
}
