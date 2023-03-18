<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Zangar-M') }}</title>

            <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('assets/images/favicon.png') }}">
    <!-- Datatable -->
    <link href="{{ URL::to('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::to('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::to('assets/css/skin.css') }}">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/pickadate/themes/default.date.css') }}">
    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
                
            </main>
        </div>


        <!-- Required vendors -->
    <script src="{{ URL::to('assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::to('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/custom.min.js') }}"></script>
    <!-- Chart Morris plugin files -->
    <script src="{{ URL::to('assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/morris/morris.min.js') }}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{ URL::to('assets/vendor/peity/jquery.peity.min.js') }}"></script>
	<!-- Demo scripts -->
    <script src="{{ URL::to('assets/js/dashboard/dashboard-2.js') }}"></script>
    <!-- Datatable -->
    <script src="{{ URL::to('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/plugins-init/datatables.init.js') }}"></script>
	<!-- Svganimation scripts -->
    <script src="{{ URL::to('assets/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/svganimation/svg.animation.js') }}"></script>
    <script src="{{ URL::to('assets/js/styleSwitcher.js') }}"></script>
    <!-- pickdate -->
    <script src="{{ URL::to('assets/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/pickadate/picker.date.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ URL::to('assets/js/plugins-init/pickadate-init.js') }}"></script>
    </body>
</html>
