<div class="card">
    <div class="card-body">

        <!-- Success Message -->
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- Header with Title -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h6 class="card-title mb-0">Visa Request</h6>
        </div>

        <!-- Search Bar -->
        <div class="row d-flex justify-content-end mb-3">
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Search Visa" wire:model.live="search">
            </div>
        </div>

        <!-- Visa Requests Table -->
        <div class="table-responsive">
            <table class="table table-hover table-centered">
                <thead class="table-light">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Visa Type</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Enquired Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userVisaRequests as $index => $userVisaRequest)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $userVisaRequest->name }}</td>
                            <td>{{ $userVisaRequest->phone }}</td>
                            <td>{{ $userVisaRequest->visaType }}</td>
                            <td>{{ $userVisaRequest->message }}</td>
                            <td>
                                <span style="cursor: pointer;" id="responded"  wire:click="command({{$userVisaRequest->id}})"
                                      data-bs-toggle="modal" 
                                      data-bs-target="#exampleModal"
                                      class="badge 
                                      @if($userVisaRequest->status == 1) bg-success
                                      @elseif($userVisaRequest->status == 2) bg-warning
                                      @elseif($userVisaRequest->status == 3) bg-danger
                                      @endif">
                                    @if($userVisaRequest->status == 1) Pending
                                    @elseif($userVisaRequest->status == 2) Responded
                                    @elseif($userVisaRequest->status == 3) No Responded
                                    @endif
                                </span>
                            </td>
                            <td>{{ $userVisaRequest->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a wire:click="confirmDelete({{ $userVisaRequest->id }})" 
                                   data-bs-toggle="modal" 
                                   data-bs-target="#exampleVerticallycenteredModal">
                                    <i class="bi bi-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Delete Confirmation Modal -->
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

        <!-- Command Input Modal -->
    <div class="modal fade @if($showCommantModal) show @endif" 
     id="exampleModal" 
     tabindex="-1" 
     aria-labelledby="exampleModalLabel" 
     aria-hidden="{{ !$showCommantModal ? 'true' : 'false' }}"
     @if($showCommantModal) style="display: block;" @endif
     @if($showCommantModal == false) data-bs-dismiss="modal" @endif>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter Command</h5>
                <button type="button" class="btn-close" 
                        data-bs-dismiss="modal" 
                        aria-label="Close" 
                        wire:click="closeCommandModal"></button>
            </div>
            <div class="modal-body">
                <label for="userCommandInput" class="form-label">Command</label>
                <textarea id="userCommandInput" 
                          class="form-control" 
                          placeholder="Type your command here..." 
                          wire:model.defer="userCommand"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" 
                        data-bs-dismiss="modal" 
                        wire:click="closeCommandModal">Close</button>
                <button type="button" class="btn btn-primary" 
                        data-bs-dismiss="modal"
                        wire:click="saveCommand">Save changes</button>
            </div>
        </div>
    </div>
</div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-end mt-3 mb-3">
            {{ $userVisaRequests->links('vendor.pagination.custom') }}
        </div>

    </div>
</div>
