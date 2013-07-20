<?php

class upTest extends WebTestCase
{
	public $fixtures=array(
		'ups'=>'up',
	);

	public function testShow()
	{
		$this->open('?r=up/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=up/create');
	}

	public function testUpdate()
	{
		$this->open('?r=up/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=up/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=up/index');
	}

	public function testAdmin()
	{
		$this->open('?r=up/admin');
	}
}
