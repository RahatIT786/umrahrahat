
               <div class="card ">
                 <div class="card-body">
                   <div class="d-flex align-items-center">
                      <h5 class="mb-0">Package Details</h5>
                      
                       <form class="ms-auto position-relative" style="margin-right: 5rem">
                         {{-- <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                         <input class="form-control ps-5" type="text" placeholder="search"> --}}
                       </form>
                       <button href="{{route('admin.package-add')}}" wire:navigate class="btn btn-primary shadow-lg"><i class="bi bi-bag-plus"></i>&nbsp; CREATE</button>
                   </div>
                   <div class="table-responsive mt-3 ">
                     <table class="table align-middle">
                       <thead class="table-secondary">
                         <tr>
                          <th>S.No</th>
                          <th>Package Image</th>
                          <th>Package Name</th>
                         
                         
                          <th>Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                        @foreach ($packages as $key => $package)
                        {{-- @livewire('admin.components.add-package',['package_id'=>$package->id]); --}}
                            
                    <tr>
                        <td> {{$key+1}} </td>
                        <td>
                            <img src="{{Storage::url($package->photo_path)}}" alt="user" class="avatar-md rounded shadow-lg" style="height: 5rem;">
                            {{-- <img src="{{ asset('storage/package_photos/'.$package->photo_path) }}" alt="Image"> --}}

                            
                        </td>
                        <td>{{$package->package_name}}</td>
                        <td>
                          <div class="table-actions d-flex align-items-center gap-3 fs-6">
                            <a style="padding: 5px; border-radius:20px;" href="{{route('viewPackage',['id' => $package->id])}}" class="text-primary bg-light-primary shadow-lg" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a> &nbsp;
                            <a style="padding: 5px; border-radius:20px;"  href="{{route('editPackage',['id' => $package->id])}}" class="text-warning bg-light-warning shadow-lg" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a> &nbsp;
                            <a style="cursor: pointer; padding: 5px; border-radius:20px;" wire:click="confirmDelete({{$package->id}})" class="text-danger bg-light-danger shadow-lg" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-target="exampleModalCenter" title="Delete"><i class="bi bi-trash-fill"></i></a>
                          </div>
                        </td>
                        {{-- <td>
                            <a href="{{route('viewPackage',['id' => $package->id])}}" style="cursor: pointer;"  class="badge badge-soft-success">
                                <iconify-icon icon="solar:eye-bold" width="22" height="22" ></iconify-icon>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('editPackage',['id' => $package->id])}}" class="badge badge-soft-warning">
                                <iconify-icon icon="solar:pen-bold" width="22" height="22"></iconify-icon>
                            </a>
                        </td> --}}
                        {{-- <td>
                            <a href="#!" wire:click="confirmDelete({{$package->id}})" class="badge badge-soft-danger" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                <iconify-icon icon="solar:trash-bin-minimalistic-bold" width="22" height="22" ></iconify-icon>
                            </a>
                        </td> --}}
                    </tr>
                            
                        @endforeach
                        
                       
                       </tbody>
                     </table>

                     
                    {{-- popup box start --}}
                    <div class="modal fade @if($showModal) show @endif"
        id="exampleModalCenter"
        tabindex="-1"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
    @if($showModal) style="display: block;" @endif>
    <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Delete</h5>
               <button type="button" class="btn-close"
                       data-bs-dismiss="modal"
                       aria-label="Close"
                       wire:click="closeConfirmDeletPopup"></button>
           </div>
           <div class="modal-body">
               <h4>Are you sure you want to delete this visa detail?</h4>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary"
                       data-bs-dismiss="modal"
                       wire:click="closeConfirmDeletPopup">Cancel</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                       wire:click="deletePackage">Yes</button>
           </div>
       </div>
    </div>
</div>


                    {{-- popup box end --}}















                   </div>
                 </div>
               </div>
          