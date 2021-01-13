<?php

namespace FireBender\Laravel\Widgets\Tests\Feature;

use FireBender\Laravel\Widgets\Tests\TestCase;
use FireBender\Laravel\Widgets\Models\Widget;

class AddWidgetTest extends TestCase

{
    /**
     * 
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
    
    /**
     * Displays for for adding a widget
     * 
     * @test
     */
    function user_can_see_add_form()
    {
        $response = $this->get('/widgets/create');

        $response->assertSee('name');
        $response->assertSee('description');
    }

    /**
     * Adds widget
     * 
     * @testa
     */
    function user_can_add_widget()
    {
        $name = 'This is the new widget name';
        $description = 'This is the new widget description';

        $data = [
            'name' => $name,
            'description' => $description
        ];

        $response = $this->post('/widgets/add', $data);

        $widget = Widget::first();

        $response->assertSee('New widget created ' . $id);
        $response->assertSee($name);
        $response->assertSee($description);
    }

}