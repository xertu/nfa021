<?php

namespace Calendar;
require '../source/App/Validator.php';
use App\Validator;

class EventValidator extends Validator {

	/**
	*@param array $data
	*@return arraybool
	*/

	public function validates(array $data){
		parent::validates($data);
		$this->validate('name', 'minlength', 3);
		$this->validate('date', 'date');
	
		$this->validate('end', 'beforeTime', 'end');
		return $this->errors;
			}
}