<?php

require_once 'dbConnection.php';

class Asset extends DBConnection{

    protected function getAll(){
        $connection = $this->connect();
        $sql = "SELECT * FROM asset";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        return json_encode($stmt->fetchAll());
    }

    protected function get($assetId){
        $connection = $this->connect();
        $sql = "SELECT * FROM asset WHERE assetId = :ID";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(":ID" , $assetId);
        $stmt->execute();
        return json_encode($stmt->fetch());
    }






}

