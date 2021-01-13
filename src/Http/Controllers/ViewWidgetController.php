<?php

namespace FireBender\Laravel\Widgets\Http\Controllers;

use Illuminate\Routing\Controller;
use FireBender\Laravel\Widgets\Models\Widget;

class ViewWidgetController extends Controller

{
    /**
     * 
     */
    public function __invoke($id)
    {
        $widget = Widget::find($id);

        return view('widgets::widgets.show', [
            'widget' => $widget
        ]);
    }
}
