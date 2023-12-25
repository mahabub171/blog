<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {

        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}


// class Database
// {
//     public $connection;
//     public $statement;
    
//     public function __construct($config, $username = 'root', $password = '')
//     {
//         $dsn = 'mysql:' . http_build_query($config, '',';');
//         $this->connection = new PDO($dsn, $username, $password, [
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//         ]);
//     }
//     public function query($query)
//     {
//         $statement = $this->connection->prepare($query);
//         $statement->execute();
//         return $statement;
//     } 

//     // public function find()
//     // {
//     //     return $this->statement->fetch();
//     // }

//     // public function findOrFail()
//     // {
//     //     $result = $this->find();
//     //     if(! $result) {
//     //         abort();
//     //     }
//     //     return $result;
//     // }
// }