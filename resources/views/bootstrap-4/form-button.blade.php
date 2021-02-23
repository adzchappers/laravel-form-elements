<button
    type="{{ $type }}"
    {!! $attributes->merge(['class' => 'btn']) !!}>
    {!! trim($slot) ?: __('Submit') !!}
</button>