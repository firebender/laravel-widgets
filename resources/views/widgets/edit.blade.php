<form method="post" action="{{ route('widgets.update') }}">
    <input type="hidden" name="id" value="{{ $widget->id }}">
    <input type="text" name="name" value="{{ $widget->name }}">
    <input type="text" name="description" value="{{ $widget->description }}">
</form>