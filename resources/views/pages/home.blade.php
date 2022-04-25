@extends('layouts.dash')
@section('content')
   <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                       <!------ Include the above in your HEAD tag ---------->
               @if (Auth::user()->role=="Member")
            
                   <div class="text-center mt-5">
                    <h1>Welcome New User you currently have no privilledges yet. kindly contact the Admin for the previlledges!!!</h1>
                   </div>
               @else
                       {{-- <div class="row">
                       <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-body">
                                   <div class="dash-widget-header">
					<span class="dash-widget-icon text-primary border-primary">
						<i class="fe fe-money"></i>
					</span>
                                       <div class="dash-count">
                                           <h3>3</h3>
                                       </div>
                                   </div>
                                   <div class="dash-widget-info">
                                       <h6 class="text-muted">Total Loans</h6>
                                       <div class="progress progress-sm">
                                           <div class="progress-bar bg-primary w-50"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-body">
                                   <div class="dash-widget-header">
						<span class="dash-widget-icon text-success">
							<i class="fe fe-credit-card"></i>
						</span>
                                       <div class="dash-count">
                                           <h3>6</h3>
                                       </div>
                                   </div>
                                   <div class="dash-widget-info">

                                       <h6 class="text-muted">Active Loans</h6>
                                       <div class="progress progress-sm">
                                           <div class="progress-bar bg-success w-50"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-body">
                                   <div class="dash-widget-header">
						<span class="dash-widget-icon text-danger border-danger">
							<i class="fe fe-folder"></i>
						</span>
                                       <div class="dash-count">
                                           <h3>5</h3>
                                       </div>
                                   </div>
                                   <div class="dash-widget-info">

                                       <h6 class="text-muted">Rejected Loans</h6>
                                       <div class="progress progress-sm">
                                           <div class="progress-bar bg-danger w-50"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-body">
                                   <div class="dash-widget-header">
						<span class="dash-widget-icon text-warning border-warning">
							<i class="fe fe-users"></i>
						</span>
                                       <div class="dash-count">
                                           <h3>4</h3>
                                       </div>
                                   </div>
                                   <div class="dash-widget-info">

                                       <h6 class="text-muted">Pending Loans</h6>
                                       <div class="progress progress-sm">
                                           <div class="progress-bar bg-warning w-50"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div> --}}

                       @if (Auth::user()->role=='SuperAdmin')
                           <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-body">
                                   <div class="dash-widget-header">
						<span class="dash-widget-icon text-warning border-warning">
							<i class="fe fe-users"></i>
						</span>
                                       <div class="dash-count">
                                           <h3>4</h3>
                                       </div>
                                   </div>
                                   <div class="dash-widget-info">

                                       <h6 class="text-muted"> super admin Loans</h6>
                                       <div class="progress progress-sm">
                                           <div class="progress-bar bg-warning w-50"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       @endif

                   </div>
               @endif

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

                   @endsection