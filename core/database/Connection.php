<?php

class Connection{
    public static function connectToDB($config){
        try{
            //return new PDO("mysql:host=127.0.0.1;dbname=groceries", "root", "");
            return new PDO($config["connection"] . 
                ";dbname=" . $config["name"], 
                $config["username"], 
                $config["password"]);
        } catch (PDOException $e){
            die("Could not connect");
        }
    }
}