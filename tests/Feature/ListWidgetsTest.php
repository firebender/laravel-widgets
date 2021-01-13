<?php

namespace FireBender\Laravel\Widgets\Tests\Feature;

use FireBender\Laravel\Widgets\Tests\TestCase;
use FireBender\Laravel\Widgets\Models\Widget;

class ListWidgetsTest extends TestCase

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
    function user_can_list_widgets()
    {
        $name1 = 'This is the first widget';
        $description1 = 'This is a nice widget';

        Widget::create([
            'name' => $name1,
            'description' => $description1
        ]);

        $name2 = 'This is the second widget';
        $description2 = 'This is a nicer widget';

        Widget::create([
            'name' => $name2,
            'description' => $description2
        ]);

        $name3 = 'This is the third widget';
        $description3 = 'This is the nicest widget';

        Widget::create([
            'name' => $name3,
            'description' => $description3
        ]);

        $response = $this->get('/widgets');

        $response->assertSee($name1);
        $response->assertSee($description1);

        $response->assertSee($name2);
        $response->assertSee($description2);

        $response->assertSee($name3);
        $response->assertSee($description3);
    }
}