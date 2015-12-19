<?php namespace RamonChristopherMorales\UserManagement;

/**
 * Class UM
 * @package RamonChristopherMorales\UserManagement
 */
class UM {

    protected $config;


    public function __construct() {

        $this->config = $this->getConfig();
    }

    public function login() {}

    public function logout() {}

    public function authenticate() {}

    public function hasAccess() {}

    public function user() {}

    /**
     * returns the config array
     *
     * @return array|null
     */
    public function getConfig() {

        $config = null;

        if (function_exists('config')) {
            $config = config('UM');
        }

        if (!$config && file_exists(__DIR__.'/config.php')) {
            $config = require __DIR__.'/config.php';
        }

        return $config;
    }

}
