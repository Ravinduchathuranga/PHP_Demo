<?php


class student
{

    public $name;
    protected $age;
    protected $city;

    public function __construct($name, $age, $city)
    {
        $name = $this->name = $name;
        $age = $this->age = $age;
        $city = $this->city = $city;
    }

    public function printDetails()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

//extends keyword is used to inherit the properties and methods of a class
class childStudent extends student
{

//printDetails() method is overridden
    public function printDetails()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "City: " . $this->city . "<br>";
    }
}

//super class object
$student1= new student("John", 20, "New York");
//sub class object
$student1 = new childStudent("John", 20, "New York");
//calling overridden method
$student1->printDetails();
