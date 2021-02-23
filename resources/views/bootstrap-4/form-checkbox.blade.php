<div class="form-group">
    @if ($title)
        <x-form-label label="{{ $title }}" />
    @endif

    @foreach ($options as $k => $v)
        <div class="form-check">
            <input
                id="{{ $id() . '_' . $k }}"
                type="checkbox"
                name="{{ $name }}"
                value="{{ $k }}" @if ($isSelected($k)) checked @endif
                class="form-check-input {{ ($hasError() ? ' is-invalid' : '') }}"
            />
            <x-form-label label="{{ $v }}" for="{{ $id() . '_' . $k }}" class="form-check-label {{ $hasError() ? 'error' : '' }}" />

            @if ($k == array_key_last($options) && $showError())
                <x-form-error name="{{ $name }}" />
            @endif
        </div>
    @endforeach

</div>
