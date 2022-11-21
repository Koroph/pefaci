@props([
    'placeholder'=>'',
    'label'=>'',
    'required'=>false,
    'id'=>\Illuminate\Support\Str::random(),
])
<div class="kh-input-custom">
    <select
        style="display: none;"
        placeholder="{{ $placeholder }}"
        id="{{ $id }}"
        {{ $required ? 'required':'' }}
        {{ $attributes->merge(['class'=>'custom-select ____custom-select']) }}>
        @if($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif
        {{ $slot }}
    </select>
    <label for="{{ $id }}" style="margin-bottom: 4px;">
        {{ $label }}
        @if($required)
            <span>**</span>
        @endif
    </label>
</div>
