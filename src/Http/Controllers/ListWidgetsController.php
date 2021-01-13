<?php

namespace FireBender\Laravel\Widgets\Http\Controllers;

use Illuminate\Routing\Controller;
use FireBender\Laravel\Widgets\Models\Widget;

class ListWidgetsController extends Controller

{
    /**
     * 
     */
    public function __invoke()
    {
        $widgets = Widget::all();

        return view('widgets::widgets.index', [
            'widgets' => $widgets
        ]);
    }
}
