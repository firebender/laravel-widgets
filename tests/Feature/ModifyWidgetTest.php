<?php

namespace FireBender\Laravel\Widgets\Tests\Feature;

use FireBender\Laravel\Widgets\Tests\TestCase;
use FireBender\Laravel\Widgets\Models\Widget;

class ModifyWidgetTest extends TestCase

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
     * Displays widget data for modification
     * 
     * @test
     */
    function user_can_see_modify_form()
    {

        $widget = $this->createWidget();

        $response = $this->get('/widgets/edit/' . $widget->id);

        $response->assertSee($widget->name);
        $response->assertSee($widget->description);
    }

    /**
     * Modifies widget
     * 
     * @test
     */
    function user_can_modify_widget()
    {
        $id = $this->createWidget()->id;
        $name = 'This is the new widget name';
        $description = 'This is the new widget description';

        $data = [
            'id' => $id,
            'name' => $name,
            'description' => $description
        ];

        $response = $this->post('/widgets/update', $data);

        $response->assertSee('Widget ' . $id . ' modified');
        $response->assertSee($name);
        $response->assertSee($description);
    }

}