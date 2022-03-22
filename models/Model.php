<?php

namespace app\models;


use app\interfaces\IModel;

abstract class Model implements IModel
{
	protected $props = [];

	public function __set($name, $value)
	{

		//TODO изменять поля только из props
		$this->props[$name] = true;
		$this->$name = $value;
	}

	public function __get($name)
	{
		return $this->$name;
	}

	public function __isset($name)
	{
		//TODO верните для существующего поля
		return true;
	}

}