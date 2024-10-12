<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>@yield('title')</title>
        
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        {{-- css --}}
        @stack('prepend-style')
            @include('component.includes.css')
        @stack('addon-style')
        
    </head>

    <body>

    {{-- navbar --}}
    @include('component.includes.navbar')

    <div class="breadcrumbs-comp">
        @yield('breadcrumb')
    </div>
    
    {{-- Component --}}

    <div class="content">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('component.includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    
    {{-- Script --}}
    @stack('prepend-script')
        @include('component.includes.js')
    @stack('addon-script')

    </body>

</html>