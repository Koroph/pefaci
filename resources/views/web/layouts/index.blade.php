@extends('web.layouts.base')
@section('body')

    @include('web.layouts.nav-bar')
    <div id="kh-base-app-main">
        {{-- main open --}}
        <main id="_main">
            @yield("main")
            @include('web.layouts.footer')
        </main>
        {{-- main close --}}
    </div>
@endsection

@section('title')
    {{ $title ?? "" }}
@endsection
@section('header')
    {{ $title ?? "" }}
@endsection
