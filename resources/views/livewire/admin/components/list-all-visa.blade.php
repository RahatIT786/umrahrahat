<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
            <h4 class="card-title">All Visa Types</h4>

            <a href="{{route('admin.visa-add')}}" wire:navigate class="btn btn-sm btn-primary">
                <i class="bx bx-plus me-1"></i>Create Visa
            </a>
        </div>
    </div> <!-- end card body -->
    <div class="table-responsive table-centered">
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
            </thead> <!-- end thead-->
            <tbody>
                @foreach ($visaDetails as $index => $visa) <!-- $index will provide the serial number -->
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- S.No will automatically increment -->
                        <td>
                            @if($visa->file_path)
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
                            <a href="#!">
                                <iconify-icon icon="solar:trash-bin-minimalistic-bold" width="22" height="22"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody> <!-- end tbody -->
        </table> <!-- end table -->
    </div> <!-- table responsive -->
    <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
        <div class="col-sm">
            <div class="text-muted">
                Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">90,521</span> orders
            </div>
        </div>
        <div class="col-sm-auto mt-3 mt-sm-0">
            <ul class="pagination pagination-rounded m-0">
                <li class="page-item">
                    <a href="#" class="page-link"><i class='bx bx-left-arrow-alt'></i></a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link"><i class='bx bx-right-arrow-alt'></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
