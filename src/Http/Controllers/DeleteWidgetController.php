<?php

namespace FireBender\Laravel\Widgets\Http\Controllers;

use Illuminate\Routing\Controller;
use FireBender\Laravel\Widgets\Models\Widget;

class DeleteWidgetController extends Controller

{
    /**
     * 
     */
    public function delete($id)
    {
        $widget = Widget::find($id);

        return view('widgets::widgets.delete', [
            'widget' => $widget
        ]);
    }

    /**
     * 
     */
    public function destroy()
    {
        $input = request()->all();

        $id = $input['id'];

        Widget::destroy($id);

        return view('widgets::widgets.destroy', [
            'id' => $id
        ]);
    }
}
