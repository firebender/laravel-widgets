<?php

namespace FireBender\Laravel\Widgets\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use FireBender\Laravel\Widgets\Providers\PackageServiceProvider;
use FireBender\Laravel\Widgets\Models\Widget;

class TestCase extends OrchestraTestCase

{
    /**
     * 
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    /**
     * 
     */
    protected function getPackageProviders($app)
    {
        return [PackageServiceProvider::class];
    }

    /**
     * 
     */
    protected function createWidget()
    {
        $name = 'This is the first widget';
        $description = 'This is a nice widget';

        $widget = Widget::create([
            'name' => $name,
            'description' => $description
        ]);

        return $widget;
    }    

}