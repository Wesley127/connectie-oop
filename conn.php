<?php

class Dbh {
    private $host;
    private $username;
    private $wachtwoord;
    private $dbNaam;
    private $charset;
    
    public function connect() {
        $this->host = "localhost";
        $this->username = "root";
        $this->wachtwoord = "";
        $this->dbNaam = "darlon";
        $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbNaam.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->wachtwoord);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch (\Exception $e){
            echo "Connection failed: ".$e->getMessage();
        }
    }
<<<<<<< HEAD
    //wesley
=======
    //darlon1234e33x
>>>>>>> 28fe394f2bd1a7a74beb6ed27bc457fd1c7ebc28
}

?>