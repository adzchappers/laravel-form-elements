@if ($label)
    <label {!! $attributes->merge() !!}>
        {{ $label }}@if ($required)<span class="required">*</span>@endif
    </label>
@endif