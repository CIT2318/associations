<!DOCTYPE html>
<html>
<head>
	<title>Associations Between Classes in PHP</title>
</head>
<body>
<?php
use OOPPractical\Student;
use OOPPractical\StudentPrinter;

require_once("student.php");
require_once("student-printer.php");


$exampleStudent = new Student("u0123456", "John", "Smith");
echo "<p>".$exampleStudent->getFullName()."</p>";

/*
1) Based on the class diagram create a Course class. Uncomment the following code to check it works. 
*/

// $exampleCourse = new Course("BA","Computing in Business");
// echo "<p>".$exampleCourse->getFullTitle()."</p>";


/*
2) Based on the class diagram create a Module class. Uncomment the following code to check it works. 
*/

// $exampleModule = new Module("CIT2318","Web Design and Programming", 40);
// echo "<p>".$exampleModule->getCredits()."</p>"; 

/*
3)
Add a course property to your Student class. 
Add getter and setter methods so the user can assign a course to a student. 
Uncomment the following code to check this works. 
*/

// $exampleStudent->setCourse($exampleCourse);
// echo "<p>".$exampleStudent->getFullName()." is studying ".$exampleStudent->getCourse()->getFullTitle()."</p>";

/*
4)
Add a module property to the Student class. 
Initialise this to be an empty array in the constructor function. 
Define setModules and getModules methods in the Student class.
Uncomment the following code to check this works.
*/

// $module1 = new Module("CIT2318","Web Design and Programming", 40);
// $module2 = new Module("CIT2310","Team Project", 20);
// $module3 = new Module("CII2350","Designing Information Systems For People", 20);

// $exampleStudent->setModules([$module1,$module2]);

// foreach($exampleStudent->getModules() as $module){
// 	echo "<p>".$module->getCredits()."</p>";
// }

/*
5)
Add a getTotalCredits() method to the Student class.
This method should return the total number of credits the student is taking.
Uncomment the following code to check this works.
*/

// echo "<p>".$exampleStudent->getFullName()." is taking ".$exampleStudent->getTotalCredits()." credits</p>";

/*
Modify the StudentPrinter class so that it prints out the full details for a student - course they are studying and the modules they are attached to.
Uncomment the following code to check this works. 
*/

// $exampleCourse2 = new Course("BSc","Web Technologies");

// $exampleStudent2 = new Student("u0123456", "Ruhksar", "Mirza");
// $exampleStudent2->setCourse($exampleCourse2);
// $exampleStudent2->setModules([$module1,$module2]);

// $exampleStudent3= new Student("u0123456", "Ania", "Kowalski");
// $exampleStudent3->setCourse($exampleCourse);
// $exampleStudent2->setModules([$module1,$module2,$module3]);

// $students=[];
// $students[]=$exampleStudent;
// $students[]=$exampleStudent2;
// $students[]=$exampleStudent3;

// $studentPrinterObj = new StudentPrinter();
// $studentPrinterObj->printStudents($students);

/*
6)
Instead of assigning all the modules in one go, it would be better to define addModule() and removeModule() methods on the Student class to add/remove modules individually. Add these methods.
Uncomment the following code to check this works. 
*/

// $exampleStudent4 = new Student("u0123456", "Fred", "Jones");
// $exampleStudent4->addModule($module1);
// $exampleStudent4->addModule($module2);
// $exampleStudent4->addModule($module3);
// $exampleStudent4->removeModule($module2);

// foreach($exampleStudent4->getModules() as $module){
// 	echo "<p>".$module->getName()."</p>";  //should output 'Web Design and Programming' and 'Designing Information Systems For People'
// }

?>
</body>
</html>