<!DOCTYPE html>
<html lang="en" @yield('html-attribute')>

<head>
    @include('admin.includes/title-meta')
    @include('admin.includes/head-css')
    <link rel="stylesheet" href="{{asset('resources.css.app.css')}}">
    @livewireStyles
</head>

<body>

    <div class="app-wrapper">

        @include('admin.includes/sidebar')

        @include('admin.includes/topbar')

        <div class="page-content">

            <div class="container-fluid">

                @yield('content')
                <!-- This is where the content from the Livewire component will be injected -->
                {{$slot}}

            </div>

            @include('admin.includes/footer')
        </div>

    </div>

    @include('admin.includes/vendor-scripts')
    @livewireScripts

</body>

</html>