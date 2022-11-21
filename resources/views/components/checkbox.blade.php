@props(['label','id'=>\Illuminate\Support\Str::random()])
@aware([
        'required'=>false,
        'name'=>''
])
<div class="kh-checkbox">
    <input
        name="{{ $name }}"
        type="checkbox"
        {{ $attributes }}
        id="{{ $id ?? $_id }}">
    <label for="{{ $id ?? $_id }}">
        {{ $label }}
    </label>
</div>
