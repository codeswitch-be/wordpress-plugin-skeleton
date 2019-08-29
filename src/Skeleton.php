<?php

namespace CodeSwitch\Skeleton;

class Skeleton
{
    /**
     * @var \CodeSwitch\Skeleton\Loader
     */
    protected $loader;

    public function __construct()
    {
        $this->loader = new Loader();
        $this->define_hooks();
    }

    /**
     * Register all hooks for the admin
     */
    private function define_hooks()
    {

    }

    /**
     * Spin up the approval dashboard
     */
    public function run()
    {
        $this->loader->run();
    }
}