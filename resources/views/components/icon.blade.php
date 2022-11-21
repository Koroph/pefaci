@props(['name','type'=>'baseline'])
@aware(['color'=>'black'])

<span class="__svg {{ $color }}">
    @php
        require resource_path()."/views/icon/svg/".$name."/".$type.".svg";
    @endphp
</span>

