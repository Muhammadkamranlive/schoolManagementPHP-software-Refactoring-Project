<?php
require_once ("./dataBaseConnectionFile/DataBaseConnection.php");

class Users extends DataBaseConnection
{
   private $userName;
   private $Password;
   private $typeOfUser;
   private $noteForUser;
   private $id;

    /**
     * @param mixed $id
     */
    function setid($id){
        $this->id=$id;
    }
     function getid(){
        return $this->id;
     }
    function setUserName($userName)
    {
        $this->userName = $userName;
    }

    function setPassword($Password)
    {
        $this->Password = $Password;
    }

    function setTypeOfUser($typeOfUser)
    {
        $this->typeOfUser = $typeOfUser;
    }

    function setNoteForUser($noteForUser)
    {
        $this->noteForUser = $noteForUser;
    }
     function getUserName()
    {
        return $this->userName;
    }
     function getPassword()
    {
        return $this->Password;
    }
     function getTypeOfUser()
    {
        return $this->typeOfUser;
    }

     function getNoteForUser()
    {
        return $this->noteForUser;
    }

    public function __construct()
    {
        parent::__construct();
    }

     //Add Users Data
    public function AddUser($ArrayData){

        $objectInsertion=$this->dbConnection->prepare("insert into users (Username,Password,typeOfUser,notForUser) values(?,?,?,?)");
        $objectInsertion->execute($ArrayData);
        try {

            echo 'User Added Succcessfully';
            header("Location:index.php");
        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }


    public function DisplayData(){
        $usersData = $this->dbConnection->query("select * from users");
        $rows=$usersData->fetchAll();
        return $rows;
    }
    public function searchRecord($id){
        $usersData = $this->dbConnection->query("select * from users where id=$id");
        $rows=$usersData->fetch();
        return $rows;
    }
    public function UpdateUser($username,$password,$type,$note,$id){

        $objectDel=$this->dbConnection->query("UPDATE users set Username='$username',Password='$password',typeOfUser='$type',notForUser='$note' where id=$id");
        try {

            echo 'User Deleted Succcessfully';
            if($objectDel->rowCount()){
                header("Location:ShowUsers.php");
            }

        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }
    public function DeleteUser ($id){
        $objectDel=$this->dbConnection->prepare("delete from users where id=?");
        $objectDel->execute(array($id));

        try {

            echo 'User Deleted Succcessfully';
            if($objectDel->rowCount()){
                header("Location:ShowUsers.php");
            }

        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }


}