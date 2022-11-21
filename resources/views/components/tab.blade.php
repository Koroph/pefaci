@props([
    'header'
])

<div class="tab">
    <div class="tab-bar">
        {{ $header }}
    </div>
    <div class="tab-content">
        {{ $slot }}
    </div>
    <div class="tab-mask">
        <div class="tab-mask-bar">
                       <span class="tab-mask-bar-item">
                           <span></span>
                       </span>
            <span class="tab-mask-bar-item">
                           <span></span>
                       </span>
            <span class="tab-mask-bar-item">
                           <span></span>
                       </span>
            <span class="tab-mask-bar-item">
                           <span></span>
                       </span>
            <span class="tab-mask-bar-item">
                           <span></span>
                       </span>
            <span class="tab-mask-bar-item">
                           <span></span>
                       </span>
        </div>
        <div class="tab-mask-content">
            <div class="tab-mask-content-item"></div>
            <div class="tab-mask-content-item"></div>
            <div class="tab-mask-content-item"></div>
            <div class="tab-mask-content-item"></div>
            <div class="tab-mask-content-item"></div>
            <div class="tab-mask-content-item"></div>
        </div>
    </div>
</div>
