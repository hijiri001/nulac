<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta data-n-head="true" charset="utf-8"><meta data-n-head="true" name="viewport" content="width=device-width,initial-scale=1"><meta data-n-head="true" data-hid="description" name="description" content="Nulac Project"><meta data-n-head="true" data-hid="mobile-web-app-capable" name="mobile-web-app-capable" content="yes"><meta data-n-head="true" data-hid="apple-mobile-web-app-title" name="apple-mobile-web-app-title" content="Nulac"><meta data-n-head="true" data-hid="theme-color" name="theme-color" content="#fff"><meta data-n-head="true" data-hid="og:type" name="og:type" property="og:type" content="website"><link data-n-head="true" rel="icon" type="image/x-icon" href="{{ asset('dist/favicon.ico') }}"><link data-n-head="true" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"><link data-n-head="true" rel="manifest" href="{{ asset('dist/_nuxt/manifest.f2bd20fa.json') }}"><link data-n-head="true" rel="shortcut icon" href="{{ asset('dist/_nuxt/icons/icon_64.9mld2VBMsQ$.png') }}"><link data-n-head="true" rel="apple-touch-icon" href="{{ asset('dist/_nuxt/icons/icon_512.9mld2VBMsQ$.png') }}" sizes="512x512"><link rel="preload" href="{{ asset('dist/_nuxt/576617ce9f9c8ed8dc15.js') }}" as="script"><link rel="preload" href="{{ asset('dist/_nuxt/3d332864864515410f60.js') }}" as="script"><link rel="preload" href="{{ asset('dist/_nuxt/bacb385bdc6c62cac2e6.js') }}" as="script"><link rel="preload" href="{{ asset('dist/_nuxt/36c49a64c5678bbbe24f.js') }}" as="script">

    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body data-n-head="">
    <div id="__nuxt"><style>#nuxt-loading{visibility:hidden;opacity:0;position:absolute;left:0;right:0;top:0;bottom:0;display:flex;justify-content:center;align-items:center;flex-direction:column;animation:nuxtLoadingIn 10s ease;-webkit-animation:nuxtLoadingIn 10s ease;animation-fill-mode:forwards;overflow:hidden}@keyframes nuxtLoadingIn{0%{visibility:hidden;opacity:0}20%{visibility:visible;opacity:0}100%{visibility:visible;opacity:1}}@-webkit-keyframes nuxtLoadingIn{0%{visibility:hidden;opacity:0}20%{visibility:visible;opacity:0}100%{visibility:visible;opacity:1}}#nuxt-loading>div,#nuxt-loading>div:after{border-radius:50%;width:5rem;height:5rem}#nuxt-loading>div{font-size:10px;position:relative;text-indent:-9999em;border:.5rem solid #f5f5f5;border-left:.5rem solid #fff;-webkit-transform:translateZ(0);-ms-transform:translateZ(0);transform:translateZ(0);-webkit-animation:nuxtLoading 1.1s infinite linear;animation:nuxtLoading 1.1s infinite linear}#nuxt-loading.error>div{border-left:.5rem solid #ff4500;animation-duration:5s}@-webkit-keyframes nuxtLoading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes nuxtLoading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}</style><script>window.addEventListener("error",function(){var e=document.getElementById("nuxt-loading");e&&(e.className+=" error")})</script><div id="nuxt-loading" aria-live="polite" role="status"><div>Loading...</div></div></div>
  <script type="text/javascript" src="{{ asset('dist/_nuxt/576617ce9f9c8ed8dc15.js') }}" defer></script><script type="text/javascript" src="{{ asset('dist/_nuxt/3d332864864515410f60.js') }}" defer></script><script type="text/javascript" src="{{ asset('/dist/_nuxt/bacb385bdc6c62cac2e6.js') }}"></script><script type="text/javascript" src="{{ asset('/dist/_nuxt/36c49a64c5678bbbe24f.js') }}" defer></script></body>
</html>
