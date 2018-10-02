<?php

class CIS475
{
    public $courseCode, $courseName;
    
    
    public function getcouseCode()
    {
        return $this->courseCode;
    }
    public function getcourseName()
    {
        return $this->courseName;
    }
    
    
    public function setcourseCode($courseCodeparam)
		{
		$this->courseCode = $courseCodeparam;
		}
		public function setcourseName($courseNameparam)
		{
			$this->courseName = $courseNameparam;
		}
                
                public function display()
		{
			echo $this->courseName . "<br>";
			echo $this->courseCode. "<br>";
	
		}

}

                
    
     
     	$class1 = new CIS475;
	$class1->setcourseName("Advanced Web Development");
	$class1->setcourseCode("CIS475");
	print_r($class1);
	echo $c1ass1->getcourseName();
	echo $class1->getcourseCode();
        
        $class2 = new CIS475;
	$class2->setcourseName("Database ");
	$class2->setcourseCode("CIS395");
        $user3->display();
        
        $class3 = new MGT485;
	$class3->setName("Strategic Management");
	$class3->setID("MGT485");
        $user3->display();

   
  
    
    
    