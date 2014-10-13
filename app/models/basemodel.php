<?php

use Carbon\Carbon;

class Basemodel extends Eloquent implements Carbon {

	public function getCreatedAtAttributes($value) 
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}

	public function getUpdatedAtAttributes($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}

}