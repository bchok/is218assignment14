<?php
  //PDO for elegant databases tutorial

  /**try {

    $conn = new PDO('mysql:host=sql2.njit.edu;dbname=bjc36', 'bjc36', 'FyBDiNm65');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $e){
    echo "Error: " . $e->getMessage();
  }

  print_r($conn);**/

  class User{

    public $id;
    public $username;
    public $firstname;
    public $lastname;
    public $email;

    public function __construct($data = null){
      if(is_array($data)){
        if(isset($data['id'])){
          $this-id = $data['id'];
        }
        $this->username = $data['username'];
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->email = $data['email'];
      }
    }

    public function getFullname(){
      echo $this->firstname . ' ' . $this->lastname;
    }
  }

  class UserRepository{
    private $connection;

    public function __construct(PDO $connection = null){
      $this->connection = $connection;
      if ($this->connection ===null){
        $this->connection = new PDO ('mysql:host=sql2.njit.edu;dbname=bjc36', 'bjc36', 'FyBDiNm65');
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    }

    public function find($id){
      //$stmt = $this->connection->prepare('SELECT "userid", ')
    }
  }


 ?>
