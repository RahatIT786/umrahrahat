<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Visa Request
        </h5>
        {{-- <p class="card-subtitle">
            A list of all package requests submitted by users, including details such as the customer name, title, email, package type, request status, and any associated notes or special requests
        </p> --}}
    </div>

    <div class="card-body">

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
                        <td>{{ $index + 1}}</td>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                <div class="d-block">
                                    <h5 class="mb-0">{{$userVisaRequest -> name}}</h5>
                                </div>
                            </div>
                        </td>
                        <td>{{$userVisaRequest -> phone}}</td>
                        <td>{{$userVisaRequest -> visaType}}</td>
                        <td>{{$userVisaRequest -> message}}</td>
                        <td>
                            <span style="cursor: pointer;" id="responded" wire:click="updateStatus({{$userVisaRequest->id}})" class="badge
                              @if($userVisaRequest->status == 1) badge-soft-success
                              @elseif ($userVisaRequest->status == 2) badge-soft-warning
                              @elseif ($userVisaRequest->status == 3) badge-soft-danger
                              @endif
                            ">
                            @if($userVisaRequest->status == 1) Pending
                            @elseif($userVisaRequest->status == 2) Responded
                            @elseif($userVisaRequest->status == 3) No Responded
                            @endif
                            </span></td>
                        <td>{{$userVisaRequest -> created_at->format('d-m-Y') }}</td>
                        <td>
                            <a wire:click="confirmDelete({{ $userVisaRequest->id }})" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" >
                                <iconify-icon icon="solar:trash-bin-minimalistic-bold" width="22" height="22" style="color: #3498db;"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
                    <h4>Are you sure you want to delete this User Visa Request?</h4>
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
        {{ $userVisaRequests->links('vendor.pagination.custom') }}
    </div>
    </div>
</div>