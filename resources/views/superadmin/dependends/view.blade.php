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
                                    <h4 class="mb-sm-0">Dependends</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $member->name.' '.$member->surname }}</a></li>
                                            <li class="breadcrumb-item active">Dependends</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i> Add dependend</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xxl-12">
                                <div class="card" id="contactList">
                                    <div class="card-header">
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search"
                                                        placeholder="Search for dependend">
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
                                                            <th class="sort" data-sort="name" scope="col">Name</th>
                                                            <th class="sort" data-sort="name" scope="col">initials</th>
                                                            <th class="sort" data-sort="surname" scope="col">Surname</th>
                                                            <th class="sort" data-sort="name" scope="col">DOB</th>
                                                            <th class="sort" data-sort="name" scope="col">National ID</th>
                                                            <th class="sort" data-sort="company_name" scope="col">Company</th>
                                                            <th class="sort" data-sort="email_id" scope="col">Email </th>
                                                            <th class="sort" data-sort="phone" scope="col">Phone </th>
                                                            <th class="sort" data-sort="lead_score" scope="col">Sex</th>
                                                           
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody class="list form-check-all">
                                                        @forelse ($dependends as $dependend )
                                                        
                                                        <tr >
                                                            <th scope="row">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                </div>
                                                            </th>
                                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                                            <td class="name">{{ $dependend->name }} </td>
                                                            <td class="company_name">{{ $dependend->initials }} </td>
                                                            <td class="name">{{ $dependend->surname }} </td>
                                                            <td class="email_id">{{ $dependend->dob }}</td>
                                                            <td class="phone">{{ $dependend->natId }}</td>
                                                            <td class="lead_score">{{ $dependend->company  }}</td>
                                                            <td class="date">{{ $dependend->email }}</td>
                                                            <td class="date">{{ $dependend->phone }}</td>
                                                            <td class="date">{{ $dependend->sex }}</td>
                                                            <td>
                                                                <ul class="list-inline hstack gap-2 mb-0">
                                                                    
                                                                    <li class="list-inline-item">
                                                                        <div class="dropdown">
                                                                             
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown shadow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                
                                                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                                <li> 
                                                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal" >
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                            
                                                        
                                                   
                                                        @empty
                                                            
                                                                <div class="text-center">
                                                                    
                                                                    <h5 class="mt-2"> No dependends  Found</h5>
                                                                    <p class="text-muted mb-0">Please Click the add dependend Button to Add a mamber.</p>
                                                                </div>
                                                           
                                                        @endforelse
                                                       
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