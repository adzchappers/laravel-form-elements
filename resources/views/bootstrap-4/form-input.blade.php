@if ($type === 'hidden')
    <input
        type="{{ $type }}"
        id="{{ $id() }}"
        name="{{ $name }}"
        value="{{ $value }}"
    />
@else
    <div class="form-group">

        <x-form-label label="{{ $label }}" :required="$required" for="{{ $id() }}" class="{{ $hasError() ? 'error' : '' }}" />
    
        <div class="input-group {{ ($hasError() ? ' is-invalid' : '') }}">

            <input
                type="{{ $type }}"
                id="{{ $id() }}"
                name="{{ $name }}"
                value="{{ $value }}"
                {{ $required ? 'required' : '' }}
                {!! $attributes->merge(['class' => $class . ($hasError() ? ' is-invalid' : '')]) !!}
            />

        </div>
    
        @if ($showError())
            <x-form-error name="{{ $name }}" />
        @endif

    </div>
@endif