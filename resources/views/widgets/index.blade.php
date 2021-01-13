@foreach ($widgets as $widget)
    <h1>{{ $widget->name }}</h1>
    <p>{{ $widget->description }}</p>
@endforeach
