<?php

class Student{
 
    private $marks;

    public function setMarks($marks){
        $this->marks = $marks;
    }

    public function getMarks(){
        return $this->marks;
    }
}
//student object
$student1= new Student();
//setting marks
$student1->setMarks(100);
//calling method
echo $student1->getMarks();


?>