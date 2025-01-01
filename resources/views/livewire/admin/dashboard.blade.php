<section>
<div class="row">
    <!-- Card 1 -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                            <iconify-icon icon="solar:globus-outline"
                                class="fs-32 text-primary avatar-title"></iconify-icon>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <p class="text-muted mb-0 text-truncate">All Package</p>
                        <h3 class="text-dark mt-2 mb-0">{{$totalPackage}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                            <iconify-icon icon="solar:bag-check-outline"
                                class="fs-32 text-primary avatar-title"></iconify-icon>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <p class="text-muted mb-0 text-truncate">Package Request</p>
                        <h3 class="text-dark mt-2 mb-0">{{$packageRequest}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                            <iconify-icon icon="fa-solid:passport"
                                class="fs-32 text-primary avatar-title"></iconify-icon>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <p class="text-muted mb-0 text-truncate">Total Visa</p>
                        <h3 class="text-dark mt-2 mb-0">{{ $totalVisa }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                            <iconify-icon icon="fa-solid:user" class="fs-32 text-primary avatar-title"></iconify-icon>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <p class="text-muted mb-0">Visa Enquiry</p>
                        <h3 class="text-dark mt-2 mb-0">{{ $userVisaEnquiry }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- COMMENTED-BY-ABUSIN-START --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card card-height-100">
            <div class="card-header d-flex align-items-center justify-content-between gap-2">
                <h4 class="card-title flex-grow-1">Top Pages</h4>
                <!-- <div>
                    <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                    <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                    <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                    <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                </div> -->
            </div>

            <div class="card-body pt-0">
                <div dir="ltr">
                    <div id="dash-performance-chart" class="apex-charts"></div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
</div> <!-- End row -->
</section>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
       var visaRequests = @json($visaRequests);  // Get visa requests data from PHP
       //  console.log(visaRequests);
       var packageRequests = @json($packageRequests);
        // console.log(packageRequests);
    // Make sure the data arrays have exactly 12 months (Jan to Dec)
    const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    
    // Fill missing months with 0 if any month data is missing
    const fillData = (data) => {
        return months.map((month, index) => data[index] || 0);
    };
    // Define the chart options dynamically
    const chartOptions = {
        series: [
            {
                name: "Visa Request",
                type: "area",
                data: visaRequests
            },
            {
                name: "Package Request",
                type: "area",
                data:  packageRequests
            }
        ],
        chart: {
            height: 313,
            type: "line",
            toolbar: { show: false }
        },
        stroke: {
            dashArray: [0, 0, 2],
            width: [0, 2, 2],
            curve: "smooth"
        },
        fill: {
            opacity: [1, 1, 1],
            type: ["solid", "gradient", "gradient"],
            gradient: {
                type: "vertical",
                inverseColors: false,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 90]
            }
        },
        markers: {
            size: [0, 0],
            strokeWidth: 2,
            hover: { size: 4 }
        },
        xaxis: {
            categories: months, // Use the months array for x-axis
            axisTicks: { show: false },
            axisBorder: { show: false }
        },
        yaxis: { min: 0, axisBorder: { show: false } },
        grid: {
            show: true,
            strokeDashArray: 3,
            xaxis: { lines: { show: false } },
            yaxis: { lines: { show: true } },
            padding: { top: 0, right: -2, bottom: 0, left: 10 }
        },
        legend: {
            show: true,
            horizontalAlign: "center",
            offsetX: 0,
            offsetY: 5,
            markers: { width: 9, height: 9, radius: 6 },
            itemMargin: { horizontal: 10, vertical: 0 }
        },
        colors: ["#1a80f8", "#17c553", "#7942ed"],
        tooltip: {
            shared: true,
            y: [
                { formatter: function (e) { return typeof e < "u" ? e.toFixed(1) + "" : e; } },
                { formatter: function (e) { return typeof e < "u" ? e.toFixed(1) + "" : e; } }
            ]
        }
    };

    // Initialize and render the chart
    var chart = new ApexCharts(document.querySelector("#dash-performance-chart"), chartOptions);
    chart.render();
</script>
