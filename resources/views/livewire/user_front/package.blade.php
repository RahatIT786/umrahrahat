<div data-elementor-type="wp-post" data-elementor-id="809" class="elementor elementor-809">
    <div class="elementor-element elementor-element-35fb97b e-flex e-con-boxed e-con e-parent" data-id="35fb97b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-b997c3f e-flex e-con-boxed e-con e-child" data-id="b997c3f" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-b99a386 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="b99a386" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="500" height="500" src="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-3.jpg" class="attachment-large size-large wp-image-630" alt="" srcset="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-3.jpg 500w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-3-300x300.jpg 300w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-3-150x150.jpg 150w"
                                sizes="(max-width: 500px) 100vw, 500px" /> </div>
                    </div>
                    <div class="elementor-element elementor-element-e7029dc elementor-widget elementor-widget-heading" data-id="e7029dc" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Our Packages</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-c592613 elementor-widget elementor-widget-heading" data-id="c592613" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h1 class="elementor-heading-title elementor-size-default">Hajj and Umrah Special Offer</h1>
                </div>
            </div>
            <div class="elementor-element elementor-element-1a084c7 elementor-widget elementor-widget-text-editor" data-id="1a084c7" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <p>
                      Experience a seamless Hajj and Umrah journey with 5-star accommodations, direct flights, and personalized support.
                       Let us guide you every step of the way.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-ad41b26 e-flex e-con-boxed e-con e-parent" data-id="ad41b26" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
        <div class="container package-container d-flex" style="display: flex; flex-wrap: wrap; gap: 20px;">
    @foreach ($packages as $package)
        <div class="elementor-element elementor-element-232d650 e-flex e-con-boxed e-con e-child" style="flex: 1 1 30%; max-width: 30%; box-sizing: border-box;">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-1d544a6 elementor-widget elementor-widget-image" data-id="1d544a6" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" style="height:10rem; width:100%;" src="{{Storage::url($package->photo_path)}}" alt="{{ $package->package_name }}">
                    </div>
                </div>
                <div class="elementor-element elementor-element-56ba10d elementor-widget elementor-widget-heading" data-id="56ba10d" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">{{ $package->package_name }}</h3>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5c92c22 elementor-widget elementor-widget-text-editor" data-id="5c92c22" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>{{ $package->description }}</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a9ad2d4 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="a9ad2d4" data-element_type="widget" data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items">
                            <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fas fa-plane"></i>
                                </span>
                                <span class="elementor-icon-list-text">Saudi Airlines</span>
                            </li>
                            <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fas fa-hotel"></i>
                                </span>
                                <span class="elementor-icon-list-text">Madinah Regency</span>
                            </li>
                            <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="icon icon-star-1"></i>
                                </span>
                                <span class="elementor-icon-list-text">5 Star Hotel</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a4d2c0a elementor-align-justify elementor-widget elementor-widget-button" data-id="a4d2c0a" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" wire:click="showPackageDetails({{ $package->id }})">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Get Package</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div>
@if ($selectedPackage)
<div style="position: fixed; top: 0; left: 0; height: 100vh; width: 100vw; display: flex; justify-content: center; align-items: center; z-index: 1000; background-color: rgba(0, 0, 0, 0.5);">

    <div class="container view-package-container" >
        <div class="d-flex justify-content-end m-3">
            <span wire:click="closePackageDetails()"><i class="fa-solid fa-xmark"></i></span>
           </div>
        <div class="row1">
            <div class="img">
                <img src="{{Storage::url($selectedPackage->photo_path)}}" alt="previewImage">
            </div>
            <div class="pack-name">
                <h1>{{$selectedPackage->package_name}}</h1>
                <h5>{{$selectedPackage->description}}</h5>
                <div class="btns">
                    <button class="book-btn btn btn-success" wire:click="bookHerePopUp">Book Here</button>
                    {{-- <button class="vourcher-btn btn btn-primary"><span ><i class="fa-solid fa-download"></i></span> Voucher</button> --}}
                </div>
            </div>
        </div>
        <div class="row2">
            <div class="includes-select">
                <a wire:click="updateContent('sharing')" >Sharing</a>
                <a wire:click="updateContent('wednesday_dates')">Departure</a>
                <a wire:click="updateContent('note')">Note</a>
                <a wire:click="updateContent('includes')">includes</a>
            </div>
            <div class="includes-display">
                    @if ($type==='sharing' && is_array($includesContent))
                    <!-- If the type is sharing, display sharing related data -->
                    <div class="room-share-details">
                        <div>
                        <strong>Room Sharing Detail</strong>
                        <p>Quint:  {{ $includesContent['quint'] }}.AED</p>
                        <p>Quad: {{ $includesContent['quad'] }}.AED</p>
                        <p>Triple: {{ $includesContent['triple'] }}.AED</p>
                        <p>Double: {{ $includesContent['double'] }}.AED</p>
                        <p>Single: {{ $includesContent['single'] }}.AED</p>
                        </div>  
                    </div>
                    @elseif($type === 'wednesday_dates'  && is_array($includesContent))
                        <div class="d-flex align-items-center">
                            <h3>Departure Place : </h3>
                            @foreach ($departurePlace as $place)
                            <div style="margin: 0px 8px;">
                                <span class="departure-days">{{$place}}</span><br>
                            </div>
                            @endforeach
                        </div>
                        <!-- Loop through the decoded $includesContent for wednesday dates -->
                        <h3 class="text-start">Departure Date : </h3>
                         <div class="" >
                                @foreach ($includesContent as $data)
                            <div class="departure-month"> <strong>{{ $data['month'] }}:</strong></div>
                                <div class="departure-days">
                                @foreach ($data['wednesdays'] as $wednesday)
                                <span class="date-box">{{ $wednesday }}</span>
                                @endforeach
                                </div>
                                @endforeach
                            </div>
                    @else
                    <p>
                        {{$includesContent}}
                    </p>
                @endif
            </div>
        </div>
        <div class="package-includes">
            <div class="package-includes-lable">package Includes</div>
            <div class="include-items">
             <span><i class="fa-solid fa-bus"></i><div>bus</div></span>
            <span><i class="fa-solid fa-passport"></i><div>visa</div></span>
            <span><i class="fa-solid fa-file"></i><div>insurance</div></span>
            <span><i class="fa-solid fa-bed"></i><div>hotel</div></span>
            <span><i class="fa-solid fa-utensils"></i><div>meal</div></span>
            <span><i class="fa-solid fa-shirt"></i><div>laundry</div></span>
            <span><i class="fa-solid fa-person-praying"></i><div>ziyarat</div></span>
            <span><i class="fa-solid fa-bottle-water"></i><div>zamzam</div></span>
            <span><i class="fa-solid fa-sim-card"></i><div>saudi sim</div></span>
            </div>
        </div>
    </div>
</div>
@endif
</div>


<!-- Popup Modal -->
@if ($showPopup)
<div class="modal">
    <div class="modal-content">
        <span wire:click="closeBookHerePopUp" class="close">&times;</span>
        <h3>Book Your Enquiry</h3>

        <!-- Form -->
        <form wire:submit.prevent="packageEnquirySubmitForm">
            <div>
                {{-- <label for="name">Name </label> --}}
                <input type="text" id="name" wire:model.defer="customerName" placeholder="Enter your name" required>
            </div>
            <br>
            <div>
                {{-- <label for="mobile">Mobile</label> --}}
                <input type="text" id="mobile" wire:model.defer="cutomerMobile" placeholder="Enter your mobile number" required>
            </div>
            <div>
                
                <input type="hidden" id="packageId" wire:model.defer="packageId" value="{{$customerChoosenPackage}}" >
                
            </div>
            <div>
                <h5>Choosen Package </h5>
                <h6>{{$customerChoosenPackage}}</h6>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endif

    </div>
    <div class="elementor-element elementor-element-23ae455 e-flex e-con-boxed e-con e-parent" data-id="23ae455" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/www.youtube.com\/watch?v=a3MeLj37S8w&quot;,&quot;background_video_start&quot;:126,&quot;background_video_end&quot;:147}">
        <div class="e-con-inner">
            <div class="elementor-background-video-container elementor-hidden-mobile">
                <div class="elementor-background-video-embed"></div>
            </div>
            <div class="elementor-element elementor-element-aa1c058 e-flex e-con-boxed e-con e-child" data-id="aa1c058" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-e3ea40d elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="e3ea40d" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="500" height="500" src="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-3.jpg" class="attachment-large size-large wp-image-630" alt="" srcset="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-3.jpg 500w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-3-300x300.jpg 300w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-3-150x150.jpg 150w"
                                sizes="(max-width: 500px) 100vw, 500px" /> </div>
                    </div>
                    <div class="elementor-element elementor-element-e487115 elementor-widget elementor-widget-heading" data-id="e487115" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">About ZamZam</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3063846 elementor-widget elementor-widget-heading" data-id="3063846" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Our Umrah Packages Guarantee An Unparalleled Spiritual Journey</h2>
                </div>
            </div>
            <div class="elementor-element elementor-element-341b3bc e-flex e-con-boxed e-con e-child" data-id="341b3bc" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d22eafa elementor-widget elementor-widget-elementskit-video" data-id="d22eafa" data-element_type="widget" data-widget_type="elementskit-video.default">
                        <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                                <div class="video-content" data-video-player="[]" data-video-setting="{&quot;videoVolume&quot;:&quot;horizontal&quot;,&quot;startVolume&quot;:0.8,&quot;videoType&quot;:&quot;iframe&quot;,&quot;videoClass&quot;:&quot;mfp-fade&quot;}">

                                    <a class="ekit_icon_button glow-btn ekit-video-popup ekit-video-popup-btn" href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&amp;mute=0&amp;autoplay=0&amp;loop=no&amp;controls=0&amp;start=0&amp;end=" aria-label="video-popup">
        <i aria-hidden="true" class="fas fa-play"></i>		</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-84a6f4c elementor-widget elementor-widget-button" data-id="84a6f4c" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="#">
                <span class="elementor-button-content-wrapper">
                <span class="elementor-button-icon">
        <i aria-hidden="true" class="fas fa-arrow-circle-right"></i>			</span>
                            <span class="elementor-button-text">Learn More</span>
            </span>
            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--partner-logo-section-start--}}
 
    @include('livewire.user_front.components.partner-logos',['dataId'=>'93c5fcf'])
     {{--partner-logo-section-end--}}

    <div class="elementor-element elementor-element-6bc4964 e-flex e-con-boxed e-con e-parent" data-id="6bc4964" data-element_type="container">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-b7f45cf e-con-full elementor-hidden-tablet e-flex e-con e-child" data-id="b7f45cf" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-f964424 elementor-widget elementor-widget-image" data-id="f964424" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img loading="lazy" decoding="async" width="683" height="800" src="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/image-4.jpg" class="attachment-large size-large wp-image-268" alt="" srcset="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/image-4.jpg 683w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/image-4-256x300.jpg 256w"
                            sizes="(max-width: 683px) 100vw, 683px" /> </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-75b1087 e-flex e-con-boxed e-con e-child" data-id="75b1087" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-f0e6e8f e-flex e-con-boxed e-con e-child" data-id="f0e6e8f" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-bc34ec7 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="bc34ec7" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="500" height="500" src="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-8.jpg" class="attachment-large size-large wp-image-646" alt="" srcset="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-8.jpg 500w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-8-300x300.jpg 300w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-8-150x150.jpg 150w"
                                        sizes="(max-width: 500px) 100vw, 500px" /> </div>
                            </div>
                            <div class="elementor-element elementor-element-163726b elementor-widget elementor-widget-heading" data-id="163726b" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">Why Choose Us</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-401181d elementor-widget elementor-widget-heading" data-id="401181d" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Simplify Your Umrah Journey With Our Packages</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-18b0be9 e-flex e-con-boxed e-con e-child" data-id="18b0be9" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-c846a06 e-flex e-con-boxed e-con e-child" data-id="c846a06" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-938cda4 elementor-widget elementor-widget-image" data-id="938cda4" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="500" height="500" src="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-9.jpg" class="attachment-large size-large wp-image-650" alt="" srcset="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-9.jpg 500w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-9-300x300.jpg 300w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-9-150x150.jpg 150w"
                                                sizes="(max-width: 500px) 100vw, 500px" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-574f881 elementor-widget elementor-widget-heading" data-id="574f881" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">5 Star Hotel</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-65b1994 elementor-widget elementor-widget-text-editor" data-id="65b1994" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Our 5-star hotel offers luxury, comfort, and exceptional service during Hajj and Umrah,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b912d33 e-flex e-con-boxed e-con e-child" data-id="b912d33" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-4919436 elementor-widget elementor-widget-image" data-id="4919436" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="500" height="500" src="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-6.jpg" class="attachment-large size-large wp-image-638" alt="" srcset="https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-6.jpg 500w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-6-300x300.jpg 300w, https://kitpro.site/zamzam/wp-content/uploads/sites/203/2023/12/icon-6-150x150.jpg 150w"
                                                sizes="(max-width: 500px) 100vw, 500px" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1e5a27d elementor-widget elementor-widget-heading" data-id="1e5a27d" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">24/7 Support</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-339c6cc elementor-widget elementor-widget-text-editor" data-id="339c6cc" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>We provide 24/7 support for Hajj and Umrah, ensuring assistance and guidance throughout your journey.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-afc3c9f elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="afc3c9f" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7c87956 e-flex e-con-boxed e-con e-child" data-id="7c87956" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-af6d38f elementor-widget elementor-widget-button" data-id="af6d38f" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="tel:+917863878630">
                <span class="elementor-button-content-wrapper">
                <span class="elementor-button-icon">
       			</span>
                            <span class="elementor-button-text">Contact Us</span>
            </span>
            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7a5f475 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="7a5f475" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
            <a href="https://www.facebook.com/rahattravelsofindia/" class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-9237e77" target="_blank">
                <span class="elementor-screen-only">Facebook</span>
                                        <i class="fab fa-facebook"></i> </a>
                                        </span>
                                        <span class="elementor-grid-item">
            <a href="https://www.instagram.com/rahattravelsofindia/" class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-21da54d" target="_blank">
                <span class="elementor-screen-only">Instagram</span>
                                        <i class="fab fa-instagram"></i> </a>
                                        </span>
                                        <span class="elementor-grid-item">
            <a href="https://www.youtube.com/@RahatGroup" class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-dd6706d" target="_blank">
                <span class="elementor-screen-only">Youtube</span>
                                        <i class="fab fa-youtube"></i> </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
