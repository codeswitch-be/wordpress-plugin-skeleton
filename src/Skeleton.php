<?php

namespace CodeSwitch\Skeleton;

use CodeSwitch\Skeleton\Bootstrap\Loader;

class Skeleton
{
    /**
     * @var \CodeSwitch\Skeleton\Bootsrap\Loader
     */
    protected $loader;

    public function __construct()
    {
        $this->loader = new Loader();

        $this->define_hooks();
        $this->defineWPCliCommands();
    }

    /**
     * Register hooks
     */
    private function define_hooks()
    {

    }

    /**
     * Register WP CLI commands
     */
    private function defineWPCliCommands()
    {
        if (defined('WP_CLI') && WP_CLI) {
            // Register WP cli commands here
        }
    }

    /**
     * Spin up the approval dashboard
     */
    public function run()
    {
        $this->loader->run();
    }
}