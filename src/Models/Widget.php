<?php

namespace FireBender\Laravel\Widgets\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use FireBender\Laravel\Widgets\Database\Factories\WidgetFactory;

class Widget extends Model

{
    use HasFactory;
    
    protected $table = 'widgets';

    protected $guarded = [];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return new WidgetFactory();
    }    
}