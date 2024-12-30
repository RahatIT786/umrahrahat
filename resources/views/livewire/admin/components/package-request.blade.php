<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Package Request
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
                        <th scope="col">Customer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Package Name</th>
                        <th scope="col">Enquired Date</th>

                        <th scope="col">Call Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packageRequest as $data)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                {{-- <img src="/images/users/avatar-2.jpg" alt=""
                                    class="avatar-sm rounded-circle"> --}}
                                <div class="d-block">
                                    <h5 class="mb-0">{{$data->customer_name}}</h5>
                                </div>
                            </div>
                        </td>
                        <td>{{$data->mobile}}</td>
                        <td>{{$data->package_name}}</td>
                        <td>{{$data->created_at->format('h:i A')}}</td>
                        <td ><span style="cursor: pointer;" id="responded" wire:click="updateStatus({{$data->id}})" class="
                            @if($data->call_status =='pending') text-warning
                            @elseif ($data->call_status =='responded') text-success
                            @elseif ($data->call_status == 'no responded') text-danger
                            @endif
                            ">{{$data->call_status}}</span></td>
                        <td><a wire:click="deletePackageRequest({{$data->id}})" class="btn btn-primary btn-sm w-100">Delete</a></td>
                    </tr>
                    @endforeach
                    {{------------------------}}
                  
                </tbody>
            </table>
        </div>
    </div>
</div>