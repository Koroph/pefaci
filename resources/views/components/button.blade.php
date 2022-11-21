@props([
    'label',
    'className'=>'primary',
    'id'=>\Illuminate\Support\Str::random(),
    'icon'=>null,
    'svg'=>null,
    'decorator'=>'fill' // outline
    ])

<div class="kh-button-custom {{ $className.' '.$decorator }}">
    <button
        {{ $attributes }}
        id="{{ $id }}">
        @if($icon)
            <span class="{{ $icon }}"></span>
        @endif
        @if($svg)
            <x-icon :name="$svg"></x-icon>
        @endif
        {{ $label }}
    </button>
</div>

