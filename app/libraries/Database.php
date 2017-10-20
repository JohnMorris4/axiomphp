<?php
/*
 * PDO Database Class
 * Connect to the Database
 * Create prepared stmts
 * Bind Values
 * Return Rows and Results
 */
class Database {
    private $d_host = DB_HOST;
    private $d_user = DB_USER;
    private $d_pass = DB_PASS;
    private $d_name = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
        //set dsn
        $dsn = 'mysql:host=' . $this->d_host . ';dbname=' . $this->d_name;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        //Create PDO instance
        try{
            $this->dbh = new PDO($dsn, $this->d_user, $this->d_pass, $options);
        } catch (PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}