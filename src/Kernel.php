<?php namespace RamonChristopherMorales\UserManagement;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'um.auth' => \RamonChristopherMorales\UserManagement\Middleware\Authenticate::class,
		'um.guest' => \RamonChristopherMorales\UserManagement\Middleware\RedirectIfAuthenticated::class,
	];

}
