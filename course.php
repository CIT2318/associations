<?php
namespace OOPPractical;

class Course{
	private $type;
	private $title;

	function __construct($type,$title)
	{
		$this->type=$type;
		$this->title=$title;
	}
	public function setType($type)
	{
		$this->type;
	}
	public function getType()
	{
		return $this->type;
	}
	public function setTitle($title)
	{
		$this->title;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function getFullTitle()
	{
		return $this->type." ".$this->title;
	}

}

