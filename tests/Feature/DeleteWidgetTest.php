<?php

namespace FireBender\Laravel\Widgets\Tests\Feature;

use FireBender\Laravel\Widgets\Tests\TestCase;
use FireBender\Laravel\Widgets\Models\Widget;

class DeleteWidgetTest extends TestCase

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
     * Displays widget data for deletion
     * 
     * @test
     */
    function user_can_see_delete_form()
    {
        $widget = $this->createWidget();

        $response = $this->get('/widgets/delete/' . $widget->id);

        $response->assertSee($widget->name);
        $response->assertSee($widget->description);
    }

    /**
     * Deletes widget
     * 
     * @test
     */
    function user_can_delete_widget()
    {
        $id = $this->createWidget()->id;

        $data = ['id' => $id];

        $response = $this->post('/widgets/destroy', $data);

        $found = Widget::find($id);

        $response->assertSee('Widget ' . $id . ' deleted');
        $this->assertNull($found);
    }

}