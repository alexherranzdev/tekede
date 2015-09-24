<?php

class Setting extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $connection = 'tenant';
	protected $table = 'settings';
    protected $guarded = array();  // Important

}