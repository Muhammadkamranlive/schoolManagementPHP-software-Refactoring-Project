<?php


class DataBaseConnection
{


    protected $dbConnection;
    function __construct(){
        $this->dbConnection=new PDO("mysql:host=localhost;dbname=UniveristyManagmentSystem","root","");
        if(!$this->dbConnection){
            die("connection failed");
        }
    }

    public function loginChek($autharr)
    {
        $st= $this->dbConnection->prepare('select * from users where Username=? and Password=? and typeOfUser="Admin"');
        $st->execute($autharr);
        if ($st->rowCount() >0)
        {
            $row=$st->fetch();
            return $row[0]; // user id
        }
        else
        {
            return false;
        }
    }
}