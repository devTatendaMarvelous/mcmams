<!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="/home" class="logo logo-dark">
                    <span class="logo-sm">
                         <img src="{{ asset('logo.png')}}" alt="" height="100">
                        {{-- <img src="{{ asset('assets/images//logo-sm.png')}}" alt="{{ config('app.name') }}" height="22"> --}}
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo.png')}}" alt="" height="100">
                        {{-- <img src="{{ asset('assets/images//logo-dark.png')}}" alt="{{ config('app.name') }}" height="100"> --}}
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="/home" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('logo.png')}}" alt="" height="100">
                        {{-- <img src="{{ asset('assets/images//logo-sm.png')}}" alt="{{ config('app.name') }}" height="22"> --}}
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo.png')}}" alt="" height="100">
                        {{-- <img src="{{ asset('assets/images//logo-light.png')}}" alt="{{ config('app.name') }}" height="150"> --}}
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
            
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/home" >
                                <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboard</span>
                            </a>
                            
                        </li> <!-- end Dashboard Menu -->
                         <li class="nav-item">
                           <a class="nav-link menu-link" 
                           @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif href="/users" >
                                <i class="  ri-group-fill "></i> <span data-key="t-layouts">Users</span>
                            </a>
                            
                        </li>
                       <li class="nav-item">
                            <a class="nav-link menu-link"
                            @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif href="#products" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="products">
                                <i class=" mdi mdi-sticker-text-outline "></i> <span data-key="t-layouts">Financials Management</span>
                            </a>
                            <div class="collapse menu-dropdown" id="products">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/products" class="nav-link"  data-key="t-horizontal">All Contributions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/products/create" class="nav-link"  data-key="t-detached">Add Contribution</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Update Contribution</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Refunds</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Add Refund</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Manage Payments</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Add Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                         <li class="nav-item">
                            <a class="nav-link menu-link"
                            @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif href="#members" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="members">
                                <i class=" ri-contacts-fill "></i> <span data-key="t-layouts">Members</span>
                            </a>
                            <div class="collapse menu-dropdown" id="members">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/members" class="nav-link"  data-key="t-horizontal">Manage Members</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/members/create" class="nav-link"  data-key="t-detached">Add Member</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Medical History Enquiry</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached"> View Annal limits </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Management Reports</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link"
                            @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="  ri-account-pin-circle-line "></i> <span data-key="t-layouts">Accounts</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/accounts/" class="nav-link"  data-key="t-horizontal">All Accounts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/" class="nav-link"  data-key="t-detached">Dependends</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                          <li class="nav-item">
                            <a class="nav-link menu-link"
                            @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif href="#claims" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="claims">
                                <i class=" bx bx-money-withdraw  "></i> <span data-key="t-layouts">Claims</span>
                            </a>
                            <div class="collapse menu-dropdown" id="claims">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/claims" class="nav-link"  data-key="t-horizontal">All Claims</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/" class="nav-link"  data-key="t-detached">Add Claims</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->

                        <li class="nav-item">
                            <a class="nav-link menu-link"
                            @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif href="#tarrifs" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="tarrifs">
                                <i class="  bx bx-food-menu  "></i> <span data-key="t-layouts">Tarrifs & Configurations</span>
                            </a>
                            <div class="collapse menu-dropdown" id="tarrifs">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-horizontal">All tarrifs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached">Add tarrifs</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link"
                            @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif href="#wellness" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="wellness">
                                <i class="  bx bx-book-heart  "></i> <span data-key="t-layouts">Employee Wellness</span>
                            </a>
                            <div class="collapse menu-dropdown" id="wellness">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-horizontal">Manage Claims</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/" class="nav-link"  data-key="t-detached">Add Claims</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link"  data-key="t-detached"></a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->



                      

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->