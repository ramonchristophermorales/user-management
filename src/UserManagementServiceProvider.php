<?php namespace Morales\UserManagement;

use Illuminate\Support\ServiceProvider;

class UserManagementServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if (! $this->app->routesAreCached()) {
			require_once __DIR__.'/routes.php';
		}

		$this->loadViewsFrom(__DIR__.'/views', 'userManagement');

		$this->loadTranslationsFrom(__DIR__.'/lang', 'userManagement');

		$this->publishes([
			__DIR__.'/config.php' => config_path('userManagement.php'),
		], 'config');

		$this->publishes([
			__DIR__.'/views' => base_path('resources/views/morales/userManagement'),
		], 'views');

		$this->publishes([
			__DIR__.'/assets' => public_path('morales/userManagement'),
		], 'assets');

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->make('Morales\UserManagement\UserManagementController');
	}

}
