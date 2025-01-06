@include('user.includes.header')
@include('user.includes.homeHeader')
@include('user.includes.aboutHeader')
@include('user.includes.ourServiceHeader')
@include('user.includes.pricePlanHeader')
@include('user.includes.OurBlogHeader')
@include('user.includes.gellaryHeader')
@include('user.includes.404Header')
@include('user.includes.ContactHeader')
<body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-5 elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-5">
    <div id="page">
        <!-- navbar -->
        @include('user.includes.navbar')
       
        <!-- This is where the content from the Livewire component will be injected -->
        {{$slot}}
        
        @include('user.includes.footer')
    </div>
    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <link rel='stylesheet' id='elementor-post-1210-css' href='https://templatekit.rometheme.pro/prayer/wp-content/uploads/sites/32/elementor/css/post-1210.css?ver=1735749694' media='all' />
    <link rel='stylesheet' id='widget-icon-list-css' href='https://templatekit.rometheme.pro/prayer/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css?ver=3.26.3' media='all' />
    <link rel='stylesheet' id='elementor-post-589-css' href='https://templatekit.rometheme.pro/prayer/wp-content/uploads/sites/32/elementor/css/post-589.css?ver=1735749694' media='all' />
    <link rel='stylesheet' id='widget-divider-css' href='https://templatekit.rometheme.pro/prayer/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.26.3' media='all' />
    <link rel='stylesheet' id='elementor-post-669-css' href='https://templatekit.rometheme.pro/prayer/wp-content/uploads/sites/32/elementor/css/post-669.css?ver=1735749694' media='all' />
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/offcanvas.js?ver=1.5.2" id="rkit-offcanvas-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/navmenu.js?ver=1.5.2" id="rkit-navmenu-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/rkit-navmenu.js?ver=1.5.2" id="navmenu-rkit-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/social_share.js?ver=1.5.2" id="social-share-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/running_text.js?ver=1.5.2" id="running-text-script-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js?ver=1.5.2" id="chartjs-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/testimonial_carousel.js?ver=1.5.2" id="rkit-testimonial_carousel-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/tabs.js?ver=1.5.2" id="rkit-tabs-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/progress.js?ver=1.5.2" id="progress-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/counter.js?ver=1.5.2" id="rkit-counter-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/countdown.js?ver=1.5.2" id="rkit-countdown-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_comparison.js?ver=1.5.2" id="rkit-image-comparison-script-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=3.1.1" id="hello-theme-frontend-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1" id="jquery-numerator-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.26.3" id="elementor-webpack-runtime-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.26.3" id="elementor-frontend-modules-js"></script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.26.3",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_onboarding": true,
                "e_css_smooth_scroll": true,
                "hello-theme-header-footer": true,
                "home_screen": true,
                "nested-elements": true,
                "editor_v2": true,
                "e_element_cache": true,
                "link-in-bio": true,
                "floating-buttons": true,
                "launchpad-checklist": true
            },
            "urls": {
                "assets": "https:\/\/templatekit.rometheme.pro\/prayer\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/templatekit.rometheme.pro\/prayer\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/templatekit.rometheme.pro\/prayer\/wp-content\/uploads\/sites\/32"
            },
            "nonces": {
                "floatingButtonsClickTracking": "4b4c8331f4"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "body_background_background": "classic",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 391,
                "title": "Homepage%20%E2%80%93%20Prayer",
                "excerpt": "",
                "featuredImage": "https:\/\/templatekit.rometheme.pro\/prayer\/wp-content\/uploads\/sites\/32\/2024\/12\/blog-4-1024x683.jpg"
            }
        };
    </script>
    <script src="https://templatekit.rometheme.pro/prayer/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.26.3" id="elementor-frontend-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <livewire:scripts />   
</body>
</html>