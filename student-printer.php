<?php
namespace OOPPractical;
use OOPPractical\Student;

class StudentPrinter{
    function printStudents($students)
    {
        foreach($students as $student){
           echo "<h2>".$student->getStudentNum()."</h2>";
           echo "<p>".$student->getFullName()." is studying ".$student->getCourse()->getFullTitle()."</p>";
           echo "<p>Modules:</p>";
           echo "<ul>";
           foreach($student->getModules() as $module)
      			{
      				echo "<li>".$module->getCode()." ".$module->getTitle()."</li>";
      			}
			 echo "</ul>";
        }
    }
}