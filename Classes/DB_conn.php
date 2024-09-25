<?php
    class database
    {
        function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
        function getData()
        {
            $query = $this->pdo->prepare('SELECT * FROM `customers`');
            $query->execute();
            return $query->fetchAll();
        }
        function getPrice(){
            $query = $this->pdo->prepare('SELECT * FROM `price` ORDER BY `id` DESC');
            $query->execute();
            return $query->fetchAll();
        }
    }
?>