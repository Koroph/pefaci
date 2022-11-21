@props([
    'value',
    'id'=>\Illuminate\Support\Str::random()
    ])
@aware([
        'name'=>'sc'
])
<div class="selected-container">
    <input
        value="{{ $value }}"
        id="{{ $id }}"
        name="{{ $name }}"
        type="checkbox">
    <label for="{{ $id }}">
        {{ $slot }}
    </label>
</div>
