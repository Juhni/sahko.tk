<?php
class Dbconfig {
    protected $host;
    protected $user;
    protected $password;
    protected $database;

    function Dbconfig() {
        $this -> host = 'localhost';
        $this -> user = 'root';
        $this -> password = 'pass';
        $this -> database = 'dbase';
    }
}
?>
