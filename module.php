<?php
namespace OOPPractical;

class Module{
	private $code;
	private $name;
	private $credits;

	function __construct($code,$name,$credits)
	{
		$this->setCode($code);
		$this->setName($name);
		$this->setCredits($credits);
	}
	public function setCode($code)
	{
		$this->code=$code;
	}
	public function getCode()
	{
		return $this->code;
	}
	public function setName($name)
	{
		$this->name=$name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setCredits($credits)
	{
		$this->credits=$credits;
	}
	public function getCredits()
	{
		return $this->credits;
	}



}

