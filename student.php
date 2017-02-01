<?php
namespace OOPPractical;


class Student{
	private $studentNum;
	private $firstName;
	private $lastName;

	function __construct($studentNum,$firstName,$lastName)
	{
		$this->setStudentNum($studentNum);
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
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
}

