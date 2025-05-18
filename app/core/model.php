<?php

class Model {
    protected $db;
    public $connected = true;
    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=mvc_crud;charset=utf8";
        $user = "root";
        $pass = "Lo81t1#a9g9";
        try {
            $this->db = new PDO($dsn, $user, $pass);
        } catch (PDOException $e) {

             $this->connected = false; 
        }
    }
}
$model = new Model();

if (!$model->connected) {
    require_once '../App/views/error/db.view.php';
    exit;
}
