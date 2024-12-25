<!--body section start-->
<section data-elementor-type="wp-page" data-elementor-id="1345" class="elementor elementor-1345">
        @livewire('welcome-rahat')
        @livewire('home-about')
        {{-- @livewire('partner-logos') --}}
        {{--partner-logos-start--}}
         @include('livewire.user_front.partner-logos',['dataId'=>'7c45d61a'])
        {{--partner-logos-end--}}
        @livewire('choose-package')
        @livewire('rating-numbers')
        @livewire('about-zamzam')
</section>
<!--body section end-->
