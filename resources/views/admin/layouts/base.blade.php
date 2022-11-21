<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KLA') }} - @yield('title')</title>

    <meta name="theme-color" content="##fe4202"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/system/logo.png') }}">
    @vite(['resources/js/admin.js','resources/scss/admin/admin.scss'])
</head>
<body onload="documentLoading();">
@yield('body')
<script lang="js">
    function documentLoading() {
        const previewLoader = document.getElementsByClassName('preview-loading')/*,
                footerCopyRight = document.getElementById('footer_copy_right'),
                setTableMask = document.getElementById('setTable-mask'),
                editorMask = document.getElementById('document-editor-mask')*/;

        if (previewLoader.length) {
            setTimeout(function () {
                /*if (footerCopyRight) {
                    footerCopyRight.style.display = "flex";
                }*/
                for (let i = 0; i < previewLoader.length; i++) {
                    previewLoader.item(i).style.display = "none";
                }
            }, 600);
        }
        /*if (editorMask) editorMask.remove();
        if (setTableMask) setTableMask.remove();*/

    }
</script>
</body>
</html>
