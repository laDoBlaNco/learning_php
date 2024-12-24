<?php

// Connect to the database and execute a query. We can do that with
// a class

class Database{
  // an instance property to hold the connection
  public $connection;

  // the constructor here is called on every 'new' instance of our class
  public function __construct($config,$user='root',$pass=''){

    // We had that $config hardcoded in here but when we need something to be dynamic
    // the basic rule is to push it up and out. So we made it an arg and pushed it 
    // over to index...and we'll keep pushing it up and out until it makes sense.

    // we can also use a built-in function for building queries, normally by default for get requests
    // but if we click over to the definition of the builtin we can see that it also takes an optional
    // divider so we can change it from the '&' to ';'
    $dsn = 'mysql:'.http_build_query($config,'',';'); // example.com?host=localhost;port=3306;dbname=my_app;charset=utf8mb4


    // Wow big NOTE I discovered myself that the difference between interpolating with
    // values from assoc arrays and using or not using ''s depends on whether I'm using
    // {} or not for the interpolation. 
    // with {} I must use ''s ---> {$config['host']} without '' it'll error
    // If I don't use {} then I can't use '' ---> $config[port] if I use '' it'll error
    // According to stackoverflow its a 'simple' vs 'complex' formatting syntax
    // $dsn = "mysql:host={$config['host']};port=$config[port];dbname=$config[dbname];charset=$config[charset]";

    $this->connection = new pdo($dsn,$user,$pass,[
      pdo::ATTR_DEFAULT_FETCH_MODE=>pdo::FETCH_ASSOC
    ]);
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