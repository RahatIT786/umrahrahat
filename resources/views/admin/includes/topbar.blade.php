<header class="app-topbar">
     <div class="container-fluid">
          <div class="navbar-header">
               <div class="d-flex align-items-center gap-2">
                    <!-- Menu Toggle Button -->
                    <div class="topbar-item">
                         <button type="button" class="button-toggle-menu topbar-button">
                              <iconify-icon icon="solar:hamburger-menu-outline"
                                   class="fs-24 align-middle"></iconify-icon>
                         </button>
                    </div>

                    <!-- App Search-->

               </div>

               <div class="d-flex align-items-center gap-2">
                    <!-- Theme Color (Light/Dark) -->
                    <div class="topbar-item">
                         <button type="button" class="topbar-button" id="light-dark-mode">
                              <iconify-icon icon="solar:moon-outline"
                                   class="fs-22 align-middle light-mode"></iconify-icon>
                              <iconify-icon icon="solar:sun-2-outline"
                                   class="fs-22 align-middle dark-mode"></iconify-icon>
                         </button>
                    </div>

                    <!-- Notification -->
                    {{-- <div class="dropdown topbar-item">
                         <button type="button" class="topbar-button position-relative"
                              id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <iconify-icon icon="solar:bell-bing-outline" class="fs-22 align-middle"></iconify-icon>
                              <span
                                   class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill">5<span
                                        class="visually-hidden">unread messages</span></span>
                         </button>
                         <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end"
                              aria-labelledby="page-header-notifications-dropdown">
                              <div class="p-2 border-bottom bg-light bg-opacity-50">
                                   <div class="row align-items-center">
                                        <div class="col">
                                             <h6 class="m-0 fs-16 fw-semibold"> Notifications (5)</h6>
                                        </div>
                                        <div class="col-auto">
                                             <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                  <small>Clear All</small>
                                             </a>
                                        </div>
                                   </div>
                              </div>
                              <div data-simplebar style="max-height: 250px;">
                                   <!-- Item -->
                                   <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom text-wrap">
                                        <div class="d-flex">
                                             <div class="flex-shrink-0">
                                                  <img src="/images/users/avatar-1.jpg"
                                                       class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1" />
                                             </div>
                                             <div class="flex-grow-1">
                                                  <p class="mb-0"><span class="fw-medium">Sally Bieber </span>started
                                                       following you. Check out their profile!"</span></p>
                                             </div>
                                        </div>
                                   </a>
                                   <!-- Item -->
                                   <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                        <div class="d-flex">
                                             <div class="flex-shrink-0">
                                                  <div class="avatar-sm me-2">
                                                       <span
                                                            class="avatar-title text-bg-info fw-semibold fs-20 rounded-circle">
                                                            G
                                                       </span>
                                                  </div>
                                             </div>
                                             <div class="flex-grow-1">
                                                  <p class="mb-0 fw-medium">Gloria Chambers</p>
                                                  <p class="mb-0 text-wrap">
                                                       mentioned you in a comment: '@admin, check this out!
                                                  </p>
                                             </div>
                                        </div>
                                   </a>
                                   <!-- Item -->
                                   <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                        <div class="d-flex">
                                             <div class="flex-shrink-0">
                                                  <img src="/images/users/avatar-3.jpg"
                                                       class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-3" />
                                             </div>
                                             <div class="flex-grow-1">
                                                  <p class="mb-0 fw-medium">Jacob Gines</p>
                                                  <p class="mb-0 text-wrap">
                                                       Answered to your comment on the cash flow forecast's graph 🔔.
                                                  </p>
                                             </div>
                                        </div>
                                   </a>
                                   <!-- Item -->
                                   <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                        <div class="d-flex">
                                             <div class="flex-shrink-0">
                                                  <div class="avatar-sm me-2">
                                                       <span
                                                            class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                                                            <iconify-icon icon="solar:leaf-outline"></iconify-icon>
                                                       </span>
                                                  </div>
                                             </div>
                                             <div class="flex-grow-1">
                                                  <p class="mb-0 fw-medium text-wrap">A new system update is available.
                                                       Update now for the latest features.</p>
                                             </div>
                                        </div>
                                   </a>
                                   <!-- Item -->
                                   <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                        <div class="d-flex">
                                             <div class="flex-shrink-0">
                                                  <img src="/images/users/avatar-5.jpg"
                                                       class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-5" />
                                             </div>
                                             <div class="flex-grow-1">
                                                  <p class="mb-0 fw-medium">Shawn Bunch</p>
                                                  <p class="mb-0 text-wrap">
                                                       commented on your post: 'Great photo!
                                                  </p>
                                             </div>
                                        </div>
                                   </a>
                              </div>
                              <div class="text-center p-2">
                                   <a href="javascript:void(0);" class="btn btn-primary btn-sm">View All Notification <i
                                             class="bx bx-right-arrow-alt ms-1"></i></a>
                              </div>
                         </div>
                    </div>  COMMENTED-BY-ABUSIN--}}

                    <!-- User -->
                    <div class="dropdown topbar-item">
                         <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <span class="d-flex align-items-center">
                                   <img class="rounded-circle" width="32" src="/images/rahatITdepartment.png"
                                        alt="avatar-3">
                              </span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end">
                              <!-- item-->
                              <h6 class="dropdown-header">Welcome!</h6>

                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myaccount" wire:click="OpenMyAccount">
                                   <iconify-icon icon="solar:user-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span class="align-middle">My
                                        Account</span>
                              </a>

                              {{-- <a class="dropdown-item" href="#">
                                   <iconify-icon icon="solar:wallet-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span
                                        class="align-middle">Pricing</span>
                              </a>
                              <a class="dropdown-item" href="#">
                                   <iconify-icon icon="solar:help-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span
                                        class="align-middle">Help</span>
                              </a>
                              <a class="dropdown-item" href="">
                                   <iconify-icon icon="solar:lock-keyhole-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span class="align-middle">Lock
                                        screen</span>
                              </a> COMMENTED-BY-ABUSIN--}}

                              <div class="dropdown-divider my-1"></div>

                              <form class="dropdown-item text-danger" action="{{route('admin.logout')}}" method="POST" id="logout-form">
                                   @csrf
                                   <iconify-icon icon="solar:logout-3-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span
                                        class="align-middle" id="logout-text" style="cursor: pointer;">Logout</span>
                              </form>
                              <script>
                                   document.getElementById('logout-text').addEventListener('click',function(){
                                        document.getElementById('logout-form').submit();
                                   })
                              </script>
                         </div>
                    </div>
               </div>
          </div>
     </div>



 <!--CONFIRM DELETE -POPUP Modal -->


  <div class="modal  @if($showMyAccount) show @endif" 
  id="myaccount" 
  tabindex="-1" 
  aria-labelledby="myaccountLabel" 
  aria-hidden="true" 
  wire:ignore.self 
  data-bs-backdrop="false">
  
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content shadow-lg p-3 mb-5 bg-body rounded">
          <div class="modal-header">
              <h5 class="modal-title" id="myaccountLabel">My Account</h5>
              <button type="button" 
                      class="btn-close" 
                      data-bs-dismiss="modal" 
                      aria-label="Close" 
                      wire:click="closeMyAccount"></button>
          </div>
          <div class="modal-body">
              <!-- Admin details and password change form -->
              <form wire:submit.prevent="updateAccountDetails">
               <div>
                    @if (session()->has('success'))
                    <div id="myaccountMessage"   class="alert alert-success text-center myaccountMessage">
                        {{ session('success') }}
                    </div>
                   
                @endif
                <script>
                               
                            
                       </script>
               </div>
                 
                  <div class="mb-3">
                      <label for="admin-email" class="form-label">Admin Email</label>
                      <input type="email" class="form-control" id="admin-email" wire:model="email" required >
                  </div>
                  <div class="mb-3">
                      <label for="new-password" class="form-label">Change Password</label>
                      <input type="{{$showPassword ? 'text' : 'password'}}" class="form-control" id="new-password" wire:model="password" required >
                      <span>
                         <input type="checkbox" wire:model.live="showPassword"> Show Password
                      </span>
                  </div>
                  {{-- <div class="mb-3">
                      <label for="confirm-password" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm-password" wire:model="confirmPassword">
                  </div> --}}
                  <button type="submit" class="btn btn-primary">Save Changes</button>
              </form>
          </div>
          <script>
               // document.addEventListener('DOMContentLoaded', function () {
               //     var alertMessage = document.getElementById('alert-message');
               //     if (alertMessage) {
               //         setTimeout(function () {
               //             alertMessage.style.display = 'none';
               //         }, 3000);
               //     }
               // });

                 // Wait for 3 seconds (3000 milliseconds) then hide the error message
      </script>
      </div>
  </div>
</div>











</header>