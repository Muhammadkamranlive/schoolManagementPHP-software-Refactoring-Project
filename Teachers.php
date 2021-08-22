<?php

require_once ("People.php");
class Teachers extends People
{
    private $salary;
    private $degree;
    private $married;

    /**
     * Teachers constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     * @return Teachers
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * @param mixed $degree
     * @return Teachers
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarried()
    {
        return $this->married;
    }

    /**
     * @param mixed $married
     * @return Teachers
     */
    public function setMarried($married)
    {
        $this->married = $married;
        return $this;
    }
    // Overrding the  Parent Class Functions


    public function inserRecord($arrayData)
    {
        parent::inserRecord($arrayData); // TODO: Change the autogenerated stub
        $data=$this->dbConnection->prepare("insert into teachers (firstName,lastName,Gender,dateOfBirth,address,Phone,email,placeOfBirth,note,salary,degree,married) values (?,?,?,?,?,?,?,?,?,?,?,?)");
        $data->execute($arrayData);
        try {

            echo '<span class="alert alert-success py-5 my5">Record Added Successfully</span>';

        }


        catch(Exception $e) {
            echo '<span class="alert alert-danger">Error in Insertion</span>';
            echo 'Message: ' .$e->getMessage();
        }

    }

    public function deleteRecord($id)
    {
        parent::deleteRecord($id); // TODO: Change the autogenerated stub
        try {
            $data=$this->dbConnection->prepare("DELETE from teachers where id=?");
            $data->execute(array($id));
            header("Location:Addteachers.php");
        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

    }

    public function searchRecord($id)
    {
        parent::searchRecord($id); // TODO: Change the autogenerated stub
        $data=$this->dbConnection->prepare("select * from teachers where id=?");
        $data->execute(array($id));
        $row=$data->fetch();
        return $row;
    }

    public function Display()
    {
        parent::Display(); // TODO: Change the autogenerated stub
        $data=$this->dbConnection->prepare("select * from teachers");
        $data->execute();
        $row=$data->fetchAll();
        return $row;
    }

    public function updateRecord($id)
    {
        parent::updateRecord($id); // TODO: Change the autogenerated stub

        $data=$this->dbConnection->prepare("UPDATE teachers set firstName='$this->firstName',lastName='$this->lastName',Gender='$this->Gender',dateOfBirth='$this->dateOfBirth',address='$this->address',Phone='$this->Phone',email='$this->email',placeOfBirth='$this->placeOfBirth',note='$this->note',salary='$this->salary',degree='$this->degree',married='$this->married' where id=?");
        $data->execute(array($id));
        if($data->rowCount()>0){
            header("Location:ShowTeachers.php");
        }

    }


}