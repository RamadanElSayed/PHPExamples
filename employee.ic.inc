<?php

class Employee
{

    public $id;
    public $name;
    public $dep_id;
    public $salary;
    public $position;
    public static $connection;

    function displayDetails(){
        echo "name Is".$this->name."<br>";
        echo "Salary Is".$this->salary."<br>";
        echo "age Is".$this->age."<br>";
        echo "position Is".$this->position;

    }

    function create()
    {
        $name=$this->name;
        // $age=$this->age;
        $salary=$this->salary;
        $dep_id=$this->dep_id;
        $connection = mysqli_connect('localhost' ,'root' , '' , "company");
        if (!$connection){
            die("error : ".$connection);
        }
        //mysqli_select_db("test");
        $query = "insert into employee (name,dep_id,salary) values ('$name',$dep_id,$salary)";
        $result = mysqli_query($connection , $query);
        //mysqli for OOp Operations
        echo "<script>alert('dataInsertSuccessfully');</script>";
        $connection->close();
        header("location:Employee.php");
    }

    function getAll()
    {
        $connection = mysqli_connect('localhost' ,'root' , '' , "company");
        $query = "select * from employee";
        $result = mysqli_query($connection , $query);
        $connection->close();
        return $result;
    }


    function delete($id)
    {

        $connection = mysqli_connect('localhost' ,'root' , '' , "company");
        if (!$connection){
            die("error : ".$connection);
        }
        $query = "delete  from employee where id =$id";
        $result = mysqli_query($connection , $query);
        if(!$result)
        {
            die("error : ".$result);

        }
        $connection->close();


        header("location: Employee.php");
    }
    function details($id)
    {

        $connection = mysqli_connect('localhost' ,'root' , '' , "company");
        if (!$connection){
            die("error : ".$connection);
        }
        $query = "select * from employee where id =$id";
        $result = mysqli_query($connection , $query);
        if(!$result)
        {
            die("error : ".$result);

        }
        $connection->close();
        return $result;

    }

    function update($id)
    {
        $name=$this->name;

        $connection = mysqli_connect('localhost', 'root', '', "company");
        if (!$connection) {
            die("error : " . $connection);
        }
        $query = "update employee set name ='$name' where id =$id";
        $result = mysqli_query($connection, $query);

        header("location: Employee.php");
    }

}