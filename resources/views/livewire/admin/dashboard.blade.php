
<div >
    <!--start top header-->
     
       <!--end top header-->

        <!--start sidebar -->
       
       <!--end sidebar -->

       <!--start content-->
         
              
             <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                 <div class="col">
                  <div class="card rounded-4">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <p class="mb-1">Total Package</p>
                          <h4 class="mb-0">{{$totalPackage ?? 0}}</h4>
                          <p class="mb-0 mt-2 font-13">
                            {{-- <i class="bi bi-arrow-up"></i><span></span> --}}
                          </p>
                        </div>
                        <div class="ms-auto widget-icon bg-primary text-white">
                          <i class="bi bi-basket2"></i>
                          
                        </div>
                      </div>
                     
                    </div>
                  </div>
                 </div>
                 <div class="col">
                  <div class="card rounded-4">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <p class="mb-1">Package Request</p>
                          <h4 class="mb-0">{{$packageRequest ?? 0}}</h4>
                          <p class="mb-0 mt-2 font-13">
                            {{-- <i class="bi bi-arrow-up"></i><span></span> --}}
                          </p>
                        </div>
                        <div class="ms-auto widget-icon bg-success text-white">
                          <i class="bi bi-currency-dollar"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                 <div class="col">
                  <div class="card rounded-4">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <p class="mb-1">Total Visa</p>
                          <h4 class="mb-0">{{ $totalVisa ?? 0 }}</h4>
                          <p class="mb-0 mt-2 font-13">
                            {{-- <i class="bi bi-arrow-up"></i><span></span> --}}
                          </p>
                        </div>
                        <div class="ms-auto widget-icon bg-orange text-white">
                          <i class="bi bi-emoji-heart-eyes"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                 <div class="col">
                  <div class="card rounded-4">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="">
                          <p class="mb-1">Total Visa Enquries</p>
                          <h4 class="mb-0">{{ $userVisaEnquiry ?? 0 }}</h4>
                          <p class="mb-0 mt-2 font-13">
                            <span></span>
                          </p>
                        </div>
                        <div class="ms-auto widget-icon bg-info text-white">
                          <i class="bi bi-people-fill"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>

             </div><!--end row-->

             
             <!-- <div class="row">
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                   <div class="card w-100 rounded-4">
                     <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0">Revenue History</h6>
                        <div class="fs-5 ms-auto dropdown">
                           <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                             <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="#">Action</a></li>
                               <li><a class="dropdown-item" href="#">Another action</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#">Something else here</a></li>
                             </ul>
                         </div>
                       </div>
                      <div class="d-flex align-items-center gap-3">
                        <div class="">
                          <h4 class="text-success mb-0">$9,279</h4>
                          <p class="mb-0">Revenue</p>
                        </div>
                        <div class="vr"></div>
                        <div class="">
                          <h4 class="text-pink mb-0">$5,629</h4>
                          <p class="mb-0">Investment</p>
                        </div>
                      </div>
                        <div id="chart1"></div>
                     </div>
                   </div>
                </div>
              
             </div> -->
             <!--end row-->
          
       <!--end page main-->

       <!--start overlay-->
        <!-- <div class="overlay nav-toggle-icon"></div> -->
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <!-- <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a> -->
       <!--End Back To Top Button-->

       <!--start switcher-->
       <!-- <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3" checked>
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div> -->
       <!--end switcher-->

  <div class="row">
    <div class="col-lg-12">
        <div class="card card-height-100">
            <div class="card-header d-flex align-items-center justify-content-between gap-2">
                <h4 class="card-title flex-grow-1"></h4>
            </div>

            <div class="card-body pt-0">
                <div dir="ltr">
                    <div id="dash-performance-chart" class="apex-charts"></div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
</div>
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
    var chart = new ApexCharts(document.querySelector("#dash-performance-chart"), chartOptions);
    chart.render();
    
</script>


