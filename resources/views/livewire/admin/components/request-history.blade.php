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
            <h6 class="card-title mb-0"></h6>
        </div>

        <!-- Search Bar -->
        <div class="d-flex align-items-center mb-3">
            <h4 class="mb-0">All Visa Request Command</h4>
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
                        <th class="border-0 py-2">User Name</th>
                        <th class="border-0 py-2">Mobile</th>
                        <th class="border-0 py-2">command</th>
                        <th class="border-0 py-2">Previous Status</th>
                        <th class="border-0 py-2">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($CommandDatas as $index => $CommandData)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>{{$CommandData->username}}</td>
                            <td>{{$CommandData->mobile_number}}</td>
                            <td>{{$CommandData->command}}</td> 
                            <td>
                                @if($CommandData->previous_status == 1) Pending
                                @elseif($CommandData->previous_status == 2) Responded
                                @elseif($CommandData->previous_status == 3) No Responded
                                @endif
                            </td> 
                            <td>{{$CommandData->created_at}}</td>  
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Pagination Links -->
        <div class="d-flex justify-content-end mt-3 mb-3">
            {{ $CommandDatas->links('vendor.pagination.custom') }}  <!-- Ensure custom pagination view is available -->
        </div>

    </div>
</div>

