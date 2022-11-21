@props([
    'header',
    'section',
    'trailing' => null
])
<div class="row">
    <div class="col-12 {{ is_null($trailing) ? '':'col-md-10' }}">
        <div id="display-view">
            @isset($header)
                <div id="display-view-header">
                    {{ $header }}
                </div>
            @endisset
            @isset($section)
                <div>
                    {!! $section !!}
                </div>
            @endisset
            <div id="display-view-body" class="padding">
                {!! $slot !!}
            </div>
        </div>
    </div>
    @if(!is_null($trailing))
        <div class="col-12 col-md-2">
           <div style="padding: 64px 6px 16px 6px;">
               {{ $trailing }}
           </div>
        </div>
    @endif
</div>

