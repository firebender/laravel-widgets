<?php

namespace FireBender\Laravel\Widgets\Http\Controllers;

use Illuminate\Routing\Controller;
use FireBender\Laravel\Widgets\Models\Widget;

class AddWidgetController extends Controller

{
    /**
     * Displays create widget form
     */
    public function create()
    {
        return view('widgets::widgets.create');
    }

    /**
     * 
     */
    public function added()
    {
        $input = request()->all();

        $name = $input['name'];
        $description = $input['description'];

        $data = [
            'name' => $input['name'],
            'description' => $input['description'],
        ];

        $widget = Widget::create($data);

        return view('widgets::widgets.added', [
            'widget' => $widget
        ]);
    }
}
