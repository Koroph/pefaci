@props([
    'label',
    'required'=>false,
    'id'=>\Illuminate\Support\Str::random(),
    'description'=>null
])

<div class="kh-input-custom">
    <small class="input-description">
        {{ $description ?? '' }}
    </small>
    <fieldset {{ $attributes->merge(['class'=>'kh-input-field']) }}>
        {{ $slot }}
    </fieldset>
    <label for="{{ $id }}">
        {{ $label }}
        @if($required) <span>**</span> @endif
    </label>
</div>

