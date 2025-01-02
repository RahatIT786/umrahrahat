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
                            <h3 class="elementor-heading-title elementor-size-default">Saudi Visas</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-c592613 elementor-widget elementor-widget-heading" data-id="c592613" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h1 class="elementor-heading-title elementor-size-default">Saudi Visas Special Offer</h1>
                </div>
            </div>
            <div class="elementor-element elementor-element-1a084c7 elementor-widget elementor-widget-text-editor" data-id="1a084c7" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <p>
                        Take advantage of our exclusive Saudi Visa offers for Tourist, Business, Personal, and Hajj/Umrah visas. Enjoy fast processing, expert support, and special rates to make your travel experience to Saudi Arabia smooth and hassle-free. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-ad41b26 e-flex e-con-boxed e-con e-parent" data-id="ad41b26" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
            <div class="elementor-element elementor-element-0cc2f2e e-flex e-con-boxed e-con e-child" data-id="0cc2f2e" data-element_type="container">
            <div class="visa-details-container">
    @if($visaDetails->count() == 0)
        <h3>Empty data</h3>
    @else
        @foreach ($visaDetails as $visaDetail)
            <div style="margin-bottom: 100px !important;" class="visa-detail-item">
                <div  class="elementor-element elementor-element-232d650 e-flex e-con-boxed e-con e-child" data-id="232d650" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-1d544a6 elementor-widget elementor-widget-image" data-id="1d544a6" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="800" height="600" src="{{ Storage::url($visaDetail->file_path) }}" class="attachment-large size-large wp-image-788" alt="" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-56ba10d elementor-widget elementor-widget-heading" data-id="56ba10d" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">{{$visaDetail->visa_type}}</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5c92c22 elementor-widget elementor-widget-text-editor" data-id="5c92c22" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default"></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a9ad2d4 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="a9ad2d4" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-hotel"></i>
                                        </span>
                                        <span class="elementor-icon-list-text">QR.{{$visaDetail->price}}</span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-plane"></i>
                                        </span>
                                        <span class="elementor-icon-list-text">
                                            <div>Processing Time</div>
                                            <div>{{$visaDetail->processing_time}} days</div>
                                        </span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="icon icon-star-1"></i>
                                        </span>
                                        <span class="elementor-icon-list-text">
                                            <div>-- docs required --</div>
                                            <span>{{$visaDetail->documents_required}}</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a4d2c0a elementor-align-justify elementor-widget elementor-widget-button" data-id="a4d2c0a" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a wire:click="UserRequestVisaType({{ $visaDetail->id }})" class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"  data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Get Package</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

            </div>
        </div>
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
                            <h3 class="elementor-heading-title elementor-size-default">About Rahat Group</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3063846 elementor-widget elementor-widget-heading" data-id="3063846" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Providing exceptional travel and visa services, specializing in Umrah packages</h2>
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
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="https://www.youtube.com/embed/w1cMpMBahFE?feature=oembed?playlist=w1cMpMBahFE&amp;mute=0&amp;autoplay=0&amp;loop=no&amp;controls=0&amp;start=0&amp;end=">
                <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Watch video</span>
            </span>
            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--partner-logos-start--}}
    @include('livewire.user_front.components.partner-logos',['dataId'=>'93c5fcf'])
    {{--partner-logos-end--}}
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
                                        <a href="+917863878630" class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="#">
                                            <span class="elementor-button-content-wrapper">
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

 <!-- Enquiry Form Modal -->
<div 
    class="@if($showModal) modal fade show @endif" 
    id="enquiryModal"
    tabindex="-1" 
    aria-labelledby="enquiryModalLabel" 
    aria-hidden="true" 
    @if ($showModal)
        style="display: block;"
    @else
        style="display: none;"
    @endif
     >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="uservisaEnquiry" >
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" wire:model="name" placeholder="Enter your full name" required>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" id="phone" wire:model="phone" placeholder="Enter your phone number" required>
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="message" wire:model="message" rows="4" placeholder="Enter your enquiry details" required></textarea>
                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                        <!-- Loading message -->
                    <div wire:loading>
                        Submitting...
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Submit Enquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>