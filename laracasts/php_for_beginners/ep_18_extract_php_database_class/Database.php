<?php

// Connect to the database and execute a query. We can do that with
// a class

class Database{
  // an instance property to hold the connection
  public $connection;

  // the constructor here is called on every 'new' instance of our class
  public function __construct(){
    $dsn = 'mysql:host=localhost;port=3306;dbname=my_app;charset=utf8mb4';

    $this->connection = new pdo($dsn,'ladoblanco','hack');
  }

  // create a method for that action
  public function query($query){
    
    // putting the query as an agrument now makes it more dynamic and
    // not hardcoded
    $stmt = $this->connection->prepare($query);
    
    $stmt->execute();
    
    // our method now just returns the statement allowing to
    // controll somewhere else whether we use fetch or fetchAll
    return $stmt;
    
  }

}