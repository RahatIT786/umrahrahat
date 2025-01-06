<header class="top-header">        
        <nav class="navbar navbar-expand gap-3 align-items-center">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
              
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret show" aria-expanded="true" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                    <img src="{{asset("images/rahatITdepartment.png")}}" class="user-img" alt="">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img src="{{asset("images/rahatITdepartment.png")}}" alt="" class="rounded-circle" width="54" height="54">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">Rahat IT</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">Tech Team</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myaccount" wire:click="OpenMyAccount">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-person-fill"></i></div>
                           <div class="ms-3"><span>Profile</span></div>
                         </div>
                       </a>
                    </li>
                    
                    <li><hr class="dropdown-divider"></li>
                    <li>
                     
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-lock-fill"></i></div>
                           <div class="ms-3">
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
                       
                    </li>
                </ul>
              </li>
              </ul>
              </div>
        </nav>


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