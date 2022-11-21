<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PEFACI') }} - @yield('title')</title>

    <meta name="theme-color" content="#fe4202"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/system/logo.jpg') }}">
    @vite(['resources/js/web.js','resources/scss/web/main.scss'])
</head>
<body id="kh-root-app">
<div id="kh-base-app">
    @yield('body')
</div>

{{--<script>
    function documentLoading() {
        const previewLoader = document.getElementsByClassName('preview-loading'),
            footerCopyRight = document.getElementById('footer_copy_right'),
            setTableMask = document.getElementById('setTable-mask'),
            flatTableMask = document.getElementById('flatTable-mask'),
            editorMask = document.getElementById('document-editor-mask');
        if (previewLoader.length) {
            setTimeout(function () {
                if (footerCopyRight) {
                    footerCopyRight.style.display = "flex";
                }
                for (let i = 0; i < previewLoader.length; i++) {
                    previewLoader.item(i).style.display = "none";
                }
            }, 600);
        }
        if (editorMask) editorMask.remove();
        if (setTableMask) setTableMask.remove();
        if (flatTableMask) flatTableMask.remove();
    }
</script>--}}
</body>
</html>
