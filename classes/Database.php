<?php
  class Database{
    private $server_name = "localhost"; //same as 127.0.0.1
    private $username = "root"; //username
    private $password = "root"; //Note: MaMP == ""root
    private $db_name = "the_company"; //database name
    protected $conn;//connection object

    #Constructor
    public function __construct(){
      #Initialization of the connection variable
      $this->conn = new mysqli($this ->server_name, $this->username, $this->password, $this->db_name);

      #check if there is an error on the connection object
      #during runtime
      if($this->conn->connect_error){
        #Display error message if there is error.
        die("Unable to connect to the database. " . $ths->conn->error);
      }
    }
  }


?>