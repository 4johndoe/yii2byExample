<?php 

namespace app\models\customer;

/**
* class Customer
*/
class Customer
{
	public $name;
	public $bitrh_date;
	public $notes = '';
	public $phones = [];

	function __construct($name, $bitrh_date)
	{
		$this->name = $name;
		$this->bitrh_date = $bitrh_date;
	}
}