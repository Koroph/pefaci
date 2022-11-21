@props([
    'label'=>null,
    'icon'=>'add',
    'url'=>null,
    'shadow'=>false
])
<div class="section-view {{ $shadow ? 'shadow':'' }}">
    @if($label)
        <div class="section-view-header">
            <div class="section-view-header-left">
                {{ $label }}
            </div>
            <div class="section-view-header-right">
                @if($url)
                    <a href="{{ $url }}">
                        <x-icon :name="$icon"></x-icon>
                    </a>
                @endif
            </div>
        </div>
    @endif
    <div class="section-view-content">
        {{ $slot }}
    </div>
</div>
