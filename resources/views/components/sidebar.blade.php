<!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="/home" class="logo logo-dark">
                    <span class="logo-sm">
                         <h1>{{ config('app.name') }}</h1>
                        {{-- <img src="{{ asset('assets/images//logo-sm.png')}}" alt="{{ config('app.name') }}" height="22"> --}}
                    </span>
                    <span class="logo-lg">
                        <h1>{{ config('app.name') }}</h1>
                        {{-- <img src="{{ asset('assets/images//logo-dark.png')}}" alt="{{ config('app.name') }}" height="17"> --}}
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="/home" class="logo logo-light">
                    <span class="logo-sm">
                        <h1>{{ config('app.name') }}</h1>
                        {{-- <img src="{{ asset('assets/images//logo-sm.png')}}" alt="{{ config('app.name') }}" height="22"> --}}
                    </span>
                    <span class="logo-lg">
                        <h1>{{ config('app.name') }}</h1>
                        {{-- <img src="{{ asset('assets/images//logo-light.png')}}" alt="{{ config('app.name') }}" height="17"> --}}
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
                                <i class=" ri-user-fill "></i> <span data-key="t-layouts">Users</span>
                            </a>
                            
                        </li>
                       <li class="nav-item">
                            <a class="nav-link menu-link"
                            @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif href="#products" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="products">
                                <i class=" ri-user-fill "></i> <span data-key="t-layouts">Contributions</span>
                            </a>
                            <div class="collapse menu-dropdown" id="products">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/products" class="nav-link"  data-key="t-horizontal">All Contributions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/products/create" class="nav-link"  data-key="t-detached">Add Contribution</a>
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
                                <i class=" ri-user-fill "></i> <span data-key="t-layouts">Members</span>
                            </a>
                            <div class="collapse menu-dropdown" id="members">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/members" class="nav-link"  data-key="t-horizontal">All Members</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/members/create" class="nav-link"  data-key="t-detached">Add Member</a>
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
                                <i class=" ri-user-fill "></i> <span data-key="t-layouts">Accounts</span>
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
                               
                           @endif href="#payments" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="payments">
                                <i class=" ri-user-fill "></i> <span data-key="t-layouts">Payments</span>
                            </a>
                            <div class="collapse menu-dropdown" id="payments">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/payments" class="nav-link"  data-key="t-horizontal">Clients</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/" class="nav-link"  data-key="t-detached">Other</a>
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
                                <i class=" ri-user-fill "></i> <span data-key="t-layouts">Claims</span>
                            </a>
                            <div class="collapse menu-dropdown" id="claims">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="/claims" class="nav-link"  data-key="t-horizontal">All Claims</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/" class="nav-link"  data-key="t-detached">Other</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link"
                            @if (auth::user()->role=='Member')
                            style="display:none;"
                               
                           @endif
                            href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class=" ri-user-fill "></i> <span data-key="t-layouts">Clients</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="layouts-horizontal.html" class="nav-link" target="_blank" data-key="t-horizontal">Super Admins</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-detached.html" class="nav-link" target="_blank" data-key="t-detached">Authoriser</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-two-column.html" class="nav-link" target="_blank" data-key="t-two-column">Disburser</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-vertical-hovered.html" class="nav-link" target="_blank" data-key="t-hovered">Hovered</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->

                      
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarPages">
                                <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-pages">Users</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarPages">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarProfile">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="pages-profile.html" class="nav-link" data-key="t-simple-page"> Simple Page </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="pages-profile-settings.html" class="nav-link" data-key="t-settings"> Settings </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> Gallery </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search Results </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                      

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->