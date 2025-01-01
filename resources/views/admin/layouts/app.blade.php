<!DOCTYPE html>
<html lang="en" @yield('html-attribute')>

<head>
    @include('admin.includes/title-meta')
    @include('admin.includes/head-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    @livewireStyles
</head>

<body>

    <div class="app-wrapper">

        @include('admin.includes/sidebar')

        {{-- @include('admin.includes/topbar') --}}
        @livewire('admin.components.topbar');

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
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
            $(document).ready(function() {
               toastr.options={
                "prograssBar":true,
                "positionClass":"toast-top-right",
               }
            });

            window.addEventListener('success', event => {
                toastr.success(event.detail.message);
            });

            window.addEventListener('warning', event => {
                toastr.warning(event.detail.message);
            });

            window.addEventListener('error', event => {
                toastr.error(event.detail.message);
            });

    </script>

    @stack('scripts')
    @livewireScripts
</body>

</html>