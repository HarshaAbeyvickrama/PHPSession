<?php

class DBConnection{
    protected function connect(){
        $username = "root";
        $host = "localhost";
        $pwd = "";
        $db = "assetpro";

        $dbconnection = new PDO('mysql:host=' . $host . ';dbname=' . $db, $username, $pwd);
        $dbconnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $dbconnection;
    }
}