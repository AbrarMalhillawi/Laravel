@if (count($events) > 0)
@foreach ($events as $event)
{{$event}}
@endforeach
@else
    <h1>no event</h1>
@endif