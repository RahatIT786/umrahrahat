<div class="card">
    <div class="card-body">

        <!-- Success Message -->
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- Header with Create Button -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h6 class="card-title mb-0">Visa Management</h6>
            <a href="{{ route('admin.visa-add') }}" wire:navigate class="btn btn-sm btn-primary">
                <i class="bx bx-plus me-1"></i> Create Visa
            </a>
        </div>

        <!-- Search Bar -->
        <div class="d-flex align-items-center mb-3">
            <h4 class="mb-0">All Visa Types</h4>
            <form class="ms-auto position-relative" wire:submit.prevent="">
                <input type="text" class="form-control" placeholder="Search Visa" wire:model.live="search">
            </form>
        </div>

        <!-- Visa Details Table -->
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
                        <th class="border-0 py-2 text-center">Edit</th>
                        <th class="border-0 py-2 text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visaDetails as $index => $visa)
                        <tr>
                            <td>{{ $visaDetails->firstItem() + $index }}</td>
                            <td>
                                @if ($visa->file_path)
                                    <img src="{{Storage::url($visa->file_path) }}" alt="Visa Image" class="img-thumbnail shadow-lg" style="height: 5rem;">
                                @else
                                    No Image available
                                @endif
                            </td>
                            <td>{{ $visa->visa_type }}</td>
                            <td>{{ $visa->documents_required }}</td>
                            <td>{{ $visa->processing_time }} days</td>
                            <td>${{ number_format($visa->price, 2) }}</td>
                            <td class="text-center">
                                <a class="text-primary" href="{{ route('editdata', ['id' => $visa->id]) }}" data-bs-toggle="tooltip"  data-bs-placement="bottom" title="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a  wire:click="confirmDelete({{ $visa->id }})" class="text-danger"  data-bs-placement="bottom" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Delete Confirmation -->
        <!-- <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true" @if($showModal) style="display: block;" @endif>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this visa?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" wire:click="deleteData" >Delete</button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="modal fade @if($showModal) show @endif" 
     id="exampleVerticallycenteredModal" 
     tabindex="-1" 
     aria-labelledby="exampleModalCenterTitle" 
     aria-hidden="true"
     @if($showModal) style="display: block;" @endif>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Deletion</h5>
                <button type="button" class="btn-close" 
                        data-bs-dismiss="modal" 
                        aria-label="Close"
                        wire:click="closeModal"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this visa?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" 
                        data-bs-dismiss="modal" 
                        wire:click="closeModal">Cancel</button>
                <button type="button" class="btn btn-danger" 
                        wire:click="deleteData" 
                        data-bs-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>


        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-3">
            {{ $visaDetails->links() }}
        </div>

    </div>
</div>
