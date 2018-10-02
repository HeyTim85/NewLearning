<?php

//class CIS475
//{
//    public $courseCode, $courseName;
//    
//    
//    public function getcouseCode()
//    {
//        return $this->courseCode;
//    }
//    public function getcourseName()
//    {
//        return $this->courseName;
//    }
//    
//    
//    public function setcourseCode($courseCodeparam)
//		{
//		$this->courseCode = $courseCodeparam;
//		}
//		public function setcourseName($courseNameparam)
//		{
//			$this->courseName = $courseNameparam;
//		}
//                
//                public function display()
//		{
//			echo $this->courseName . "<br>";
//			echo $this->courseCode. "<br>";
//	
//		}
//
//}
//
//                
//    
//     
//     	$class1 = new CIS475;
//	$class1->setcourseName("Advanced Web Development");
//	$class1->setcourseCode("CIS475");
//	print_r($class1);
//	echo $c1ass1->getcourseName();
//	echo $class1->getcourseCode();
//        
//        $class2 = new CIS475;
//	$class2->setcourseName("Database ");
//	$class2->setcourseCode("CIS395");
//        $user3->display();
//        
//        $class3 = new MGT485;
//	$class3->setName("Strategic Management");
//	$class3->setID("MGT485");
//        $user3->display();
        
    
       $courseCode = array();
       $courseName = array();
       
       $courseCode[0]= "CIS475";
       $courseCode[1]= "CIS395";
       $courseCode[2]= "MGT487";
       
       $courseName[0]="Advanced Web Development";
       $courseName[1]="Database Management";
       $courseName[2]="Strategic Management";
     
      echo "You have a total of ". count($courseCode) . " courses now!";
//       
//      function fixName($courseName)
//      {
//          $GLOBALS['$courseName'];
//         $fixName = ucfirst(strtolower($courseName));
//         return $fixName;
//        
//      }
//   
//      echo $fixName; didn't work
      
      echo "I am taking ".count($courseCode)." classes this semester. They are ". $courseName[0] ." ".$courseName[1]." and ".$courseName[2];
      
      

      
      
      //Originally I started it a different way, unfortunately that did not work so I tried this way. I ran out of time so I submitted it here. 
      //I will allot more time in the future. 
       