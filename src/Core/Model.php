<?php
namespace BT\Core;

class Model
{
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getProperties()
	{
		$arr = get_object_vars($this);
		return $arr;
	}
}