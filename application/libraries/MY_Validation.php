<?php defined('SYSPATH') or die('No direct script access.');

class Validation extends Validation_Core {

	public function __construct(array $array = array())
	{
		// don't for get to call the parent constructor!
		parent::__construct($array);
	}

	public function reset(array $array)
	{
		$this->pre_filters = array();
		$this->post_filters = array();
		$this->rules = array();
		$this->callbacks = array();
		$this->empty_rules = array('required', 'matches');
		$this->errors = array();
		$this->messages = array();
		$this->array_fields = array();
		$this->submitted = false;

		$this->__construct($array);
	}
}
?>