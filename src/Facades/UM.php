<?php namespace RamonChristopherMorales\UserManagement\Facades;

use Illuminate\Support\Facades\Facade;

class UM extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'UM'; }

}
