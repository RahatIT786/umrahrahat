<div class="card">
    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="d-flex align-items-center justify-content-between">
            <h4 class="card-title">All Visa Types</h4>

            <a href="{{ route('admin.visa-add') }}" wire:navigate class="btn btn-sm btn-primary">
                <i class="bx bx-plus me-1"></i>Create Visa
            </a>
        </div>
    </div>
    <!-- end card body -->

    <div class="table-responsive table-centered">
        <div class="row d-flex justify-content-end me-3">
            <h2>wewrtyry</h2>
            <div class="col-4 mb-3 ">
                <input type="text" class="form-control" placeholder="Search Packages" wire:model="search">
            </div>
        </div>
        <table class="table mb-0">
            <thead class="bg-light bg-opacity-50">
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
                            <a href="{{ route('editdata', ['id' => $visa->id]) }}">
                                <iconify-icon icon="solar:pen-bold" width="22" height="22"></iconify-icon>
                            </a>
                        </td>
                        <td>
                            <a href="#" wire:click="confirmDelete({{ $visa->id }})" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                <iconify-icon icon="solar:trash-bin-minimalistic-bold" width="22" height="22"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- table responsive -->

    <!-- Modal -->
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
                            wire:click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <h4>Are you sure you want to delete this visa detail?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal"
                            wire:click="closeModal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            wire:click="deleteData">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination links -->
    <div class="d-flex justify-content-end mt-3 mb-3">
        {{ $visaDetails->links('vendor.pagination.custom') }}
    </div>
</div>
