<div class="form-group">

    <x-form-label label="{{ $label }}" :required="$required" for="{{ $id() }}" />
    
    <div class="input-group {{ ($hasError() ? ' is-invalid' : '') }}">
    
        <select
            id="{{ $id() }}"
            name="{{ $name }}"
            {{ $required ? 'required' : '' }}
            {{ $multiple ? 'multiple' : '' }}
            {!! $attributes->merge(['class' => 'form-control ' . ($hasError() ? ' is-invalid' : '')]) !!}
        >
            @foreach ($options as $option)
                <option value="{{ $option['key'] }}" @if ($isSelected($option['key'])) selected @endif>
                    {{ $option['value'] }}
                </option>
            @endforeach
        </select>
    </div>
    
    @if ($showError())
        <x-form-error name="{{ $name }}" />
    @endif
</div>