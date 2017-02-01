<?php
namespace OOPPractical;
use OOPPractical\Course;
use OOPPractical\Module;

class Student{
	private $studentNum;
	private $firstName;
	private $lastName;
	private $course;
	private $modules;
	function __construct($studentNum,$firstName,$lastName)
	{
		$this->setStudentNum($studentNum);
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
		$this->modules=[];
	}
	public function setStudentNum($studentNum)
	{
		$this->studentNum=$studentNum;
	}
	public function getStudentNum()
	{
		return $this->studentNum;
	}
	public function setFirstName($firstName)
	{
		$this->firstName=$firstName;
	}
	public function getFirstName()
	{
		return $this->firstName;
	}
	public function setLastName($lastName)
	{
		$this->lastName=$lastName;
	}
	public function getLastName()
	{
		return $this->firstName;
	}
	public function getFullName()
	{
		return $this->firstName." ".$this->lastName;
	}
	public function setCourse(Course $course)
	{
		$this->course=$course;
	}
	public function getCourse()
	{
		return $this->course;
	}

	function addModule(Module $module)
	{
		if(!in_array($module, $this->modules)){
			$this->modules[] = $module;
		}
	}
	function removeModule($modules)
	{
		$index = array_search($modules, $this->modules, true);
		if($index > -1){
			array_splice($this->modules, $index, 1);
		}
	}

	function setModules(Array $arrOfModules)
	{
		$this->modules=$arrOfModules;
	}

	function getModules()
	{
		return $this->modules;
	}

	public function getTotalCredits(){
		$totalCredits=0;
		foreach($this->modules as $module)
		{
			$totalCredits+=$module->getCredits();
		}
		return $totalCredits;
	}

}

