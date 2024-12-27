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
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                {{-- <img src="/images/users/avatar-2.jpg" alt=""
                                    class="avatar-sm rounded-circle"> --}}
                                <div class="d-block">
                                    <h5 class="mb-0"> Tony M. Carter</h5>
                                </div>
                            </div>
                        </td>
                        <td>7534452789</td>
                        <td>Gold</td>
                        <td>17/02/2024</td>
                        <td ><span id="responded">Responded</span></td>
                        <td><a href="#!" class="btn btn-primary btn-sm w-100">Delete</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                {{-- <img src="/images/users/avatar-1.jpg" alt=""
                                    class="avatar-sm rounded-circle"> --}}
                                <div class="d-block">
                                    <h5 class="mb-0">James E. Chamb</h5>
                                </div>
                            </div>
                        </td>
                        <td>7534452789</td>
                        <td>sliver</td>
                        <td>17/02/2024</td>
                        <td id="pending">Pending</td>
                        <td><a href="#!" class="btn btn-primary btn-sm w-100">Delete</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                {{-- <img src="/images/users/avatar-4.jpg" alt=""
                                    class="avatar-sm rounded-circle"> --}}
                                <div class="d-block">
                                    <h5 class="mb-0">Charlotte J. Torres</h5>
                                </div>
                            </div>
                        </td>
                        <td>7534452789</td>
                        <td>Silver</td>
                        <td>17/02/2024</td>
                        <td id="noresponse">No Response</td>
                        <td><a href="#!" class="btn btn-primary btn-sm w-100">Delete</a></td>

                    </tr>
                    <tr class="table-active">
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                {{-- <img src="/images/users/avatar-6.jpg" alt=""
                                    class="avatar-sm rounded-circle"> --}}
                                <div class="d-block">
                                    <h5 class="mb-0 d-flex align-items-center gap-1">
                                        Mary J. Germain<i class='bx bxs-badge-check text-success'></i></iconify-icon>
                                    </h5>
                                </div>
                            </div>
                        </td>
                        <td>7534452789</td>
                        <td>Gold</td>
                        <td>17/02/2024</td>
                        <td>Responded</td>
                        <td><a href="#!" class="btn btn-primary btn-sm w-100">Delete</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                {{-- <img src="/images/users/avatar-7.jpg" alt=""
                                    class="avatar-sm rounded-circle"> --}}
                                <div class="d-block">
                                    <h5 class="mb-0">Kevin C. Reyes</h5>
                                </div>
                            </div>
                        </td>
                        <td>7534452789</td>
                        <td>Economy</td>
                        <td>17/02/2024</td>
                        <td>Pending</td>
                        <td><a href="#!" class="btn btn-primary btn-sm w-100">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>