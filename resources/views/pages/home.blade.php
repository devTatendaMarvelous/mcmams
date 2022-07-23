<x-dash>
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
                  

                       @if (Auth::user()->role=='SuperAdmin')
            
                        @if($products<1) 
                                 <div class="text-center mt-5">
                    <h1>Welcome The system currently does not have any existing Contributions !!!</h1>
                    <h1>Click the button below to add contributions</h1> <br>
                     <div class="col-sm-auto"><div><a href="/products/create" class="btn btn-success add-btn"><i class="ri-add-line align-bottom me-1"></i> Add Contribution</a></div></div>
                   </div>
                                 
                          @else
        
                                <x-chart/>
                          
                       @endif
                        @endif 

                   </div>
               @endif

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

</x-dash>