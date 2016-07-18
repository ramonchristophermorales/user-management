<?php
namespace RamonChristopherMorales\UserManagement;

/**
 * Class UM
 * @package RamonChristopherMorales\UserManagement
 */
class UM {

    /**
     * config path holder
     * @var
     */
    protected $configPath;

    /**
     * configuration data holder
     * @var array
     */
    protected $config;


    public function __construct() {

        $this->config = $this->getConfig();
    }

    public function login() { return "test"; }

    public function logout() {}

    public function authenticate() {}

    public function hasAccess() {}

    public function setAccess() {}

    public function getRoles() {}

    public function setRoles() {}

    public function user() {}

    /**
     * returns configuration array from the config file
     *
     * @param null $configPath
     * @return mixed|null
     * @throws \Exception
     */
    public function getConfig() {

        $config = null;

        if ($this->configPath) {

            if (file_exists($this->configPath)) {
                $config = require $this->configPath;
            } else {
                throw new \Exception("Failed to find STF configuration file with config path: " . $this->configPath);
            }

            return $config;
        }

        /**
         * for laravel only
         */
        if (function_exists('config')) {
            $config =  config('STF');
        }

        if (!$config) {
            if (file_exists(__DIR__.'/config.php')) {
                $config = require __DIR__.'/config.php';
            }
        }

        if (!$config) {
            throw new \Exception("Missing STF configuration file");
        }

        return $config;
    }
}
