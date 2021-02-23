@if ($errors->has($name) || $errors->has($name . '.*'))
    <div {!! $attributes->merge(['class' => 'invalid-feedback']) !!}>
        @if ($errors->has($name))
            {{ $errors->first($name) }}
        @elseif ($errors->has($name . '.*'))
            {{ $errors->first($name . '.*') }}
        @endif
    </div>
@endif