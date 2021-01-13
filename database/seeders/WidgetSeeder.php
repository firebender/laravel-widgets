<?php

namespace FireBender\Laravel\Widgets\Database\Seeders;

use Illuminate\Database\Seeder;
use FireBender\Laravel\Widgets\Models\Widget;

class WidgetSeeder extends Seeder
{
    public $times = 250;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Widget::factory()
            ->times($this->times)
            ->create();
    }
}
