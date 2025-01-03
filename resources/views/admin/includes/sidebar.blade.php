<aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            {{-- <div>
              <img src="{{asset('images/umrah_dark.png')}}" class="logo-icon" alt="logo icon">
            </div> --}}
            <div>
              <img src="{{asset('images/umrah_dark.png')}}" class="logo-icon" alt="logo icon" style="height: 7rem; width:auto;">
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="{{route('admin.dashboard')}}" wire:navigate>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
            <!-- <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Application</div>
              </a>
              <ul>
                <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Email</a>
                </li>
                <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>Chat Box</a>
                </li>
                <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>File Manager</a>
                </li>
                <li> <a href="app-to-do.html"><i class="bi bi-circle"></i>Todo List</a>
                </li>
                <li> <a href="app-invoice.html"><i class="bi bi-circle"></i>Invoice</a>
                </li>
                <li> <a href="app-fullcalender.html"><i class="bi bi-circle"></i>Calendar</a>
                </li>
              </ul>
            </li> -->
            <li class="menu-label">Package Controller</li>
            <!-- <li>
              <a href="widgets.html">
                <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                </div>
                <div class="menu-title">Widgets</div>
              </a>
            </li> -->
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Package Controller</div>
              </a>
              <ul>
                <li>
                    <a href="{{route('admin.package-manager')}}" wire:navigate>
                        <i class="bi bi-circle"></i>List All Package
                    </a>
                </li>
                <li> <a href="{{route('admin.package-request')}}" wire:navigate><i class="bi bi-circle"></i>Package Requests</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Saudi Visa Manager</div>
              </a>
              <ul>
                <l`i> <a href="{{ route('admin.saudi-visa') }}" wire:navigate><i class="bi bi-circle"></i>List All Visa</a>
                </l>
                <li> <a href="{{ route('admin.visa-request') }}" wire:navigate><i class="bi bi-circle"></i>Visa Requests</a>
                </li>
              </ul>
            </li>
          </ul>
          <!--end navigation-->
       </aside>