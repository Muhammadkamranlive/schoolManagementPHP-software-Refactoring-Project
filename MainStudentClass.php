<?php
require_once ("People.php");

class MainStudent extends People
{


    /**
     * Student constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    //overiding the parent methods
    public function inserRecord($arrayData)
    {
        parent::inserRecord($arrayData); // TODO: Change the autogenerated stub
        $data=$this->dbConnection->prepare("insert into students (firstName,lastName,Gender,dateOfBirth,address,Phone,email,placeOfBirth,note) values (?,?,?,?,?,?,?,?,?)");
        $data->execute($arrayData);
        try {

            echo 'User Added Successfully';
            header("Location:AddStudent.php");
        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

    }

    public function deleteRecord($id)
    {
        parent::deleteRecord($id); // TODO: Change the autogenerated stub
        $data=$this->dbConnection->prepare("DELETE from students where id=?");
        $data->execute(array($id));

        try {
            $data->rowCount();
            header('ShowStudents.php');
        }catch (Exception $e){
            $e->getMessage();
        }
    }

    public function Display()
    {
        parent::Display(); // TODO: Change the autogenerated stub
        $data=$this->dbConnection->prepare("select * from students");
        $data->execute();
        $row =$data->fetchAll();
        return $row;
    }

    public function searchRecord($id)
    {
        parent::searchRecord($id); // TODO: Change the autogenerated stub
        $data=$this->dbConnection->prepare("select * from students where id=?");
        $data->execute(array($id));
        $row =$data->fetch();
        return $row;
    }

    public function updateRecord($id)
    {
        parent::updateRecord($id); // TODO: Change the autogenerated stub
        $data=$this->dbConnection->prepare("UPDATE students set firstName='$this->firstName',lastName='$this->lastName',Gender='$this->Gender',dateOfBirth='$this->dateOfBirth',address='$this->address',Phone='$this->Phone',email='$this->email',placeOfBirth='$this->placeOfBirth',note='$this->note' where id=?");
        $data->execute(array($id));
        echo "updated";
    }


}