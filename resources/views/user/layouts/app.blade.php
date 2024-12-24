@include('user.includes.header')
<body class="home page-template page-template-elementor_header_footer page page-id-1345 ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-1345">
    <div id="page" class="hfeed site">
        <!-- navbar -->
        @include('user.includes.navbar')

        <!-- This is where the content from the Livewire component will be injected -->
        {{$slot}}

        @include('user.includes.footer')
    </div>
</body>
