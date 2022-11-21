@props([
    'label',
    'content'=>null,
    'color'=>'',
    'icon'=> null
])


<div class="kh-text">
    @if($label)
        <span class="kh-text-label">
            @if($icon)
                <x-icon :name="$icon"></x-icon>
            @endif
            {!! $label !!}
        </span>

    @endif
    @if($content)
        <div class="kh-text-content {{ $color }}">
            {!! $content !!}
        </div>
    @else
        {{ $slot }}
    @endif
</div>
