@props([
     'label',
   'target',
   'icon'=>null
])
<button data-target="{{ $target }}" class="tab-bar-item">
    @if($icon)
        <x-icon :name="icon"></x-icon>
    @endif
    <span>{{ $label }}</span>
</button>
