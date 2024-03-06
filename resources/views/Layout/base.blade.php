<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
@include('Layout.header')
<body>
@include('Layout.navbar')
@yield('content')
</body> 
@include('Layout.footer')
@yield('jsscript')
</html>
