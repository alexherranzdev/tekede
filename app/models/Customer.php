<?php

class Customer extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customers';	
	protected $connection = 'tenant';

}