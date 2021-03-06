<?php 

class QueryBuilder{
    public $pdo;

    function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    function fetchAllGroceries($table, $intoClass){
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    function insert($table, $parameters){
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table, 
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters)));
        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e){
            die('Something went wrong');
        }

    }
}