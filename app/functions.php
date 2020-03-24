<?php
session_start();

require_once '../app/Views/BaseView.php';
require_once '../app/Controllers/AboutController.php';
require_once '../app/Controllers/CalendarController.php';
require_once '../app/Controllers/ContactsController.php';
require_once '../app/Controllers/EventsController.php';
require_once '../app/Controllers/ErrorsController.php';
require_once '../app/Controllers/ChatController.php';
require_once '../app/Controllers/InvestigativeTrainingController.php';
require_once '../app/Controllers/MiniMBAController.php';
require_once '../app/Controllers/PodcastController.php';
require_once '../app/Controllers/ReinventingMediaController.php';
require_once '../app/Controllers/SummerSchoolController.php';
require_once '../app/Controllers/TeamController.php';
require_once '../app/Controllers/UsersController.php';
require_once '../app/Repositories/DB.php';
require_once '../app/Repositories/EventsRepository.php';
require_once '../app/Repositories/UsersRepository.php';
require_once '../app/Models/Event.php';
require_once '../app/Models/User.php';






function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die;
}

$host = '127.0.0.1';
$db   = 'bootcamp';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    DB::$connection = new PDO($dsn, $user, $pass);
    DB::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}
