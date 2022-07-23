<x-dash>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Payments</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Payments</a></li>
                                            <li class="breadcrumb-item active">All</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page titl---->
                        <div class="row">
                            
                            <div class="col-xxl-12">
                                <div class="card" id="contactList">
                                    <div class="card-header">
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search"
                                                        placeholder="Search for Payment">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-auto ms-auto">
                                                <div class="d-flex align-items-center gap-2">
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="table-responsive table-card mb-3">
                                                 <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col" style="width: 50px;">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                </div>
                                                            </th>
                                                            <th class="sort" data-sort="name" scope="col">Member Number</th>
                                                            <th class="sort" data-sort="name" scope="col">Name</th>
                                                            <th class="sort" data-sort="surname" scope="col">Surname</th>
                                                            <th class="sort" data-sort="name" scope="col">Amount</th>
                                                            <th class="sort" data-sort="name" scope="col">Referrence Number</th>
                                                            <th class="sort" data-sort="company_name" scope="col">Purpose</th>
                                                           <th class="sort" data-sort="company_name" scope="col">Date</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody class="list form-check-all">
                                                    @forelse ($payments as $payment )
                                                        
                                                        <tr >
                                                            <th scope="row">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                </div>
                                                            </th>
                                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                                            <td class="name">{{ $payment->memberno }} </td>
                                                            <td class="name">{{ $payment->name }} </td>
                                                            <td class="name">{{ $payment->surname }} </td>
                                                            <td class="email_id">{{ $payment->amount }}</td>
                                                            <td class="phone">{{ $payment->referrence }}</td>
                                                            <td class="lead_score">{{ $payment->purpose  }}</td>
                                                            <td class="lead_score">{{ $payment->created_at  }}</td>
                                                            <td>
                                                                <ul class="list-inline hstack gap-2 mb-0">
                                                                    
                                                                    <li class="list-inline-item">
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown shadow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                              
                                                                                
                                                                                <li><a class="dropdown-item edit-item-btn" href="#" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Print Invoice</a></li>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                            
                                                        


                                                   
                                                        @empty
                                                            
                                                                <div class="text-center">
                                                                    
                                                                    <h5 class="mt-2"> No Payments Made So Far</h5>
                                                                    <p class="text-muted mb-0">Please Go To Members And Make A Payment.</p>
                                                                </div>
                                                           
                                                        @endforelse
                                                         <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                                    colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                                </lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than {{ count($payments) }}+ payments We did not find any
                                                                   members for you search.</p>
                                                            </div>
                                                        </div>
                                                        </tbody>
                                                </table>
                                                       
                                                
                                            </div>
                                            <div class="d-flex justify-content-end mt-3">
                                                <div class="pagination-wrap hstack gap-2">
                                                    <a class="page-item pagination-prev disabled" href="#">
                                                        Previous
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                                    <a class="page-item pagination-next" href="#">
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                      

                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                         
                        </div><!--end row-->
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
</x-dash>