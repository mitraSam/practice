<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/10/2018
 * Time: 9:45 PM
 */

class QueryBuilder{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function getData($table){
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function post($table,$params){

        $keys = array_keys($params);
            try{
            $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
                $table,
                implode(", ",$keys),
                implode(", ",array_map(function ($key){return ":{$key}";},$keys))
                );
           $statement = $this->pdo->prepare($sql);
           $statement->execute($params);
    }catch (PDOException $e){
            die($e->getMessage());
    }
    return 'posted';
    }
}