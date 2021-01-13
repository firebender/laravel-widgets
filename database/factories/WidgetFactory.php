<?php

namespace FireBender\Laravel\Widgets\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use FireBender\Laravel\Widgets\Models\Widget;

class WidgetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Widget::class;

    /**
     * The default namespace where factories reside.
     *
     * @var string
     */
    protected static $namespace = 'FireBender\\Laravel\\Widgets\\Database\\Factories\\';

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(4, true);
        $name = substr($name, 0, strlen($name) - 1);
        $words = explode(' ', $name);
        $arr = [];
        foreach ($words as $word) {
            $arr[] = Str::ucfirst($word);
        }
        $name = implode(' ', $arr);

        return [
            'name' => $name,
            'description' => $this->faker->text(500),
        ];
    }
}
