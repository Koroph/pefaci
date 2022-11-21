@props(['label','id'=>\Illuminate\Support\Str::random()])
@aware([
    'required'=>false,
    'name'=>''
    ])
@php
 $_id=\Illuminate\Support\Str::random();
@endphp
<div class="kh-radio">
    <input
        type="radio"
        name="{{ $name }}"
        {{ $required ? 'required':'' }}
        {{ $attributes }}
        id="{{ $id ?? $_id }}">
    <label for="{{ $id ?? $_id }}">
        {{ $label }}
    </label>
</div>
