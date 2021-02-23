<div class="form-group">

    <x-form-label label="{{ $label }}" :required="$required" for="{{ $id() }}" class="{{ $hasError() ? 'error' : '' }}" />

    <div class="input-group {{ ($hasError() ? ' is-invalid' : '') }}">

        <textarea
            id="{{ $id() }}"
            name="{{ $name }}"
            {{ $required ? 'required' : '' }}
            {!! $attributes->merge(['class' => 'form-control' . ($hasError() ? ' is-invalid' : '')]) !!}
            >{!! $value !!}</textarea>

    </div>
    
    @if ($showError())
        <x-form-error name="{{ $name }}" />
    @endif

</div>