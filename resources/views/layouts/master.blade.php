<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    @include('layouts.init.head')
    <title>{{ env('APP_NAME') }}</title>
    @yield('styles')
</head>
<body>

<div id="elearn-layout" class="theme-purple">
    <!-- sidebar -->
    @include('layouts.includes.overalls.sidebar')

    @yield('main-body')
</div>

@include('layouts.init.scripts')
@yield('scripts')
</body>
</html>
