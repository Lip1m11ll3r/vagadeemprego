<?php 
/*variaveis para conexão */        
    $SERVER = 'localhost'; //servidor
    $USER = 'root'; //usuario
    $PASS = ''; //senha
    $DATABASE = 'vagasDeEmprego'; //nome da base
    $conn = new mysqli($SERVER, $USER, $PASS, $DATABASE);
            // Caso algo tenha dado errado, exibe uma mensagem de erro
            if (mysqli_connect_errno())
                trigger_error(mysqli_connect_error()); 

 
/*
class Conexao {
 
    public static $instance;
 
    private function __construct() {
        //
    }
 
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=minhabasededados', 'root', 'vertrigo',
 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
 
        return self::$instance;
    }
 
}
*/
?>