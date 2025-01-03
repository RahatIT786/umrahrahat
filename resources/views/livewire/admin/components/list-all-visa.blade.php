               <div class="card">
                 <div class="card-body">
                 @if (session()->has('message'))
                     <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                 @endif
                 <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="card-title">.</h6>
                    <a href="{{ route('admin.visa-add') }}" wire:navigate class="btn btn-sm btn-primary">
                        <i class="bx bx-plus me-1"></i>Create Visa
                    </a>
                </div>
                   <div class="d-flex align-items-center">
                      <h4 class="mb-0">All Visa Types</h4>
                       <form class="ms-auto position-relative">
                         <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                         <input type="text" class="form-control" placeholder="Search Visa" wire:model.live="search">
                       </form>
                   </div>
                   <div class="table-responsive mt-3">
                     <table class="table align-middle">
                       <thead class="table-secondary">
                         <tr>
                         <th class="border-0 py-2">S.No</th>
                        <th class="border-0 py-2">Visa Image</th>
                        <th class="border-0 py-2">Visa Type</th>
                        <th class="border-0 py-2">Documents</th>
                        <th class="border-0 py-2">Processing Time</th>
                        <th class="border-0 py-2">Price</th>
                        <th class="border-0 py-2">Edit</th>
                        <th class="border-0 py-2">Delete</th>
                         </tr>
                       </thead>
                       <tbody>
                       @foreach ($visaDetails as $index => $visa)
                    <tr>
                        <td>{{ $visaDetails->firstItem() + $index }}</td>
                        <td>
                            @if ($visa->file_path)
                                <!-- {{ dump(Storage::url($visa->file_path)) }} -->
                                <img src="{{ Storage::url($visa->file_path) }}" alt="visa image" style="height: 2rem;">
                            @else
                                No Image available
                            @endif
                        </td>
                        <td>{{ $visa->visa_type }}</td>
                        <td>{{ $visa->documents_required }}</td>
                        <td>{{ $visa->processing_time }} days</td>
                        <td>{{ $visa->price }}</td>
                        <td>
                        <a class="text-primary" href="{{ route('editdata', ['id' => $visa->id]) }}" data-bs-toggle="tooltip" data-bs-placement="bottom" >
                              <i class="bi bi-pencil-fill"></i>
                            </a>
                        </td>
                        <td>
                            <div>
                            <a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" wire:click="confirmDelete({{ $visa->id }})" >
                               <i class="bi bi-trash-fill"></i>
                            </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
