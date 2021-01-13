<?php

namespace FireBender\Laravel\Widgets\Tests\Feature;

use FireBender\Laravel\Widgets\Tests\TestCase;
use FireBender\Laravel\Widgets\Models\Widget;

class ViewWidgetTest extends TestCase

{
    /**
     * 
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
    
    /** @test */
    function user_can_view_widget()
    {
        $name = 'This is the first widget';
        $description = 'This is a nice widget';

        $widget = Widget::create([
            'name' => $name,
            'description' => $description
        ]);

        $response = $this->get('/widgets/show/' . $widget->id);

        $response->assertSee($name);
        $response->assertSee($description);
    }
}