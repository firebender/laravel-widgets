<?php

namespace FireBender\Laravel\Widgets\Http\Controllers;

use Illuminate\Routing\Controller;
use FireBender\Laravel\Widgets\Models\Widget;

class ModifyWidgetController extends Controller

{
    /**
     * 
     */
    public function edit($id)
    {
        $widget = Widget::find($id);

        return view('widgets::widgets.edit', [
            'widget' => $widget
        ]);
    }

    /**
     * 
     */
    public function update()
    {
        $input = request()->all();

        $id = $input['id'];
        $name = $input['name'];
        $description = $input['description'];

        $widget = Widget::find($id);

        $widget->name = $name;
        $widget->description = $description;
        $widget->save();

        return view('widgets::widgets.update', [
            'widget' => $widget
        ]);
    }
}
