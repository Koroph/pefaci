@props([
    'id',
    'footer'=>null
])
<form method="post" class="tab-content-item" id="{{ $id }}">
    <div class="tab-content-item-body">
        {{ $slot }}
    </div>
    <div class="tab-content-item-footer">
        @if(is_null($footer))
            <x-button
                label="Enregistrer"
                className="primary"
                type="submit"></x-button>
        @else
             {{ $footer }}
        @endif
    </div>
    <input type="hidden" name="_method" value="PUT"/>
</form>
