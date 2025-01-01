<div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="card-title">All Packages</h4>

                    <a href="{{route('admin.package-add')}}" wire:navigate class="btn btn-sm btn-primary">
                        <i class="bx bx-plus me-1"></i>Create Packages
                    </a>
                </div>
            </div> <!-- end card body -->

            <div class="table-responsive table-centered">
                <table class="table mb-0">
                    <thead class="bg-light bg-opacity-50">
                        <tr>
                            <th class="border-0 py-2">S.No</th>
                            <th class="border-0 py-2">Package Image</th>
                            <th class="border-0 py-2">Package Name</th>
                            <th class="border-0 py-2">View</th>
                            <th class="border-0 py-2">Edit</th>
                            <th class="border-0 py-2">Delete</th>
                        </tr>
                    </thead> <!-- end thead-->
                    <tbody>
                        @foreach ($packages as $key => $package)
                        {{-- @livewire('admin.components.add-package',['package_id'=>$package->id]); --}}
                            
                    <tr>
                        <td> {{$key+1}} </td>
                        <td>
                            <img src="{{Storage::url($package->photo_path)}}" alt="user" class="avatar-md rounded" style="height: 2rem;">
                            
                        </td>
                        <td>{{$package->package_name}}</td>
                        <td>
                            <a href="{{route('viewPackage',['id' => $package->id])}}" style="cursor: pointer;"  class="badge badge-soft-success">
                                <iconify-icon icon="solar:eye-bold" width="22" height="22" ></iconify-icon>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('editPackage',['id' => $package->id])}}" class="badge badge-soft-warning">
                                <iconify-icon icon="solar:pen-bold" width="22" height="22"></iconify-icon>
                            </a>
                        </td>
                        <td>
                            <a href="#!" wire:click="deletePackage({{$package->id}})" class="badge badge-soft-danger">
                                <iconify-icon icon="solar:trash-bin-minimalistic-bold" width="22" height="22" ></iconify-icon>
                            </a>
                        </td>
                    </tr>
                            
                        @endforeach
                   
                    </tbody> <!-- end tbody -->
                </table> <!-- end table -->
            </div> <!-- table responsive -->
            <div
                class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
                <div class="col-sm">
                    
                </div>
               
            </div>
            {{-- <div class="mt-3">
                {{$packages->links()}}

            </div> --}}
        </div>


        
{{-- disaplay package details --}}

{{--  

    @if ($viewPackageId)
    <div style="position: fixed; top: 0; left: 0; height: 100vh; width: 100vw; display: flex; justify-content: center; align-items: center; z-index: 1000; background-color: rgba(0, 0, 0, 0.5);">
    
        <div class="container view-package-container" >
            <div class="d-flex justify-content-end m-3">
                <span wire:click="closePackageDetails()"><i class="fa-solid fa-xmark"></i></span>
               </div>
            <div class="row1">
                <div class="img">
                    <img src="{{Storage::url($viewPackageId->photo_path)}}" alt="previewImage">
                </div>
                <div class="pack-name">
                    <h1>{{$viewPackageId->package_name}}</h1>
                    <h5>{{$viewPackageId->description}}</h5>
                    <div class="btns">
                        <button class="book-btn btn btn-success" wire:click="bookHerePopUp">Book Here</button>
                        
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
    <div style=""> 
        
       
    </div>
    @endif --}}
@if($viewPackageId)
    <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        <form wire:submit.prevent="submitForm">
            <div>
                <label for="customerName">Name:</label>
                <input type="text" id="customerName" wire:model="customerName" required>
            </div>
            <div>
                <label for="customerMobile">Mobile:</label>
                <input type="text" id="customerMobile" wire:model="customerMobile" required>
            </div>
            <button type="submit">Submit</button>
            <button type="button" wire:click="togglePopup">Cancel</button>
        </form>
    </div>
@endif