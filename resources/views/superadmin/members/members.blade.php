<x-dash>

     
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">









                                   <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">AVAILABLE MEMBERS</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="customerList">
                                            <div class="row g-4 mb-3">
                                                <div class="col-sm-auto">
                                                    <div>
                                                        <a href="/members/create" class="btn btn-success add-btn"><i class="ri-add-line align-bottom me-1"></i> Add Member</a>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="d-flex justify-content-sm-end">
                                                        <div class="search-box ms-2">
                                                            <input type="text" class="form-control search" placeholder="Search...">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="table-responsive table-card mt-3 mb-1">
                                                <table class="table align-middle table-nowrap" id="customerTable">
                                                  <thead class="table-light">
                                                        <tr>
                                                            <th class="sort" data-sort="name" scope="col">Name</th>
                                                            <th class="sort" data-sort="name" scope="col">initials</th>
                                                            <th class="sort" data-sort="surname" scope="col">Surname</th>
                                                            <th class="sort" data-sort="name" scope="col">DOB</th>
                                                            <th class="sort" data-sort="name" scope="col">National ID</th>
                                                            <th class="sort" data-sort="email_id" scope="col">Email </th>
                                                            <th class="sort" data-sort="phone" scope="col">Phone </th>
                                                            <th class="sort" data-sort="lead_score" scope="col">Sex</th>
                                                              <th class="sort" data-sort="lead_score" scope="col">Ailments</th>
                                                              <th class="sort" data-sort="lead_score" scope="col">Address</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list form-check-all">
                                                      
                                                           
                                                    




                                                        @forelse ($members as $member )
                                                        
                                                        <tr >
                                                           
                                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                                            <td class="name">{{ $member->name }} </td>
                                                            <td class="company_name">{{ $member->initials }} </td>
                                                            <td class="name">{{ $member->surname }} </td>
                                                            <td class="email_id">{{ $member->dob }}</td>
                                                            <td class="phone">{{ $member->natId }}</td>
                                                         
                                                            <td class="">{{ $member->email }}</td>
                                                            <td class="">{{ $member->phone }}</td>
                                                            <td class="">{{ $member->sex }}</td>
                                                               <td class="lead_score">{{ $member->ailments  }}</td>
                                                               <td class="lead_score">{{ $member->address  }}</td>
                                                            <td>
                                                                <ul class="list-inline hstack gap-2 mb-0">
                                                                    
                                                                    <li class="list-inline-item">
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown shadow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                @forelse ($accounts as $account)
                                                                                    @if ($account->memvber_id==$member->id<0))
                                                                                    <li><a class="dropdown-item" href="/dependends/{{ $member->id }}/show"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View Dependends</a></li>
                                                                                    <li><a class="dropdown-item" href="/dependends/{{ $member->id }}/add"><i class="ri-add-fill align-bottom me-2 text-muted"></i>Add Depended</a></li>
                                                                              
                                                                                
                                                                                @endif
                                                                                @empty
                                                                                     <li>
                                                                                        <button type="button" class="btn btn-primary-outline" >
                                                                                           
                                                                                        </button> 
                                                                                        <a class="dropdown-item" href="/accounts/{{ $member->id }}/open">
                                                                                         <i class="ri-add-fill align-bottom me-2 text-muted"></i> Open Account
                                                                                        </a></li>
                                                                               
                                                                                @endforelse
                                                                                
                                                                                <li><a class="dropdown-item edit-item-btn" href="/members/{{ $member->id }}/edit"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                                <li> 
                                                                                    <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal" >
                                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted">
                                                                                            @php
                                                                                                $id=$member->id;
                                                                                                
                                                                                            @endphp
                                                                                            </i> Delete
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
                                                                    
                                                                    <h5 class="mt-2"> No Members  Found</h5>
                                                                    <p class="text-muted mb-0">Please Click the add Member Button to Add a mamber.</p>
                                                                </div>
                                                           
                                                        @endforelse










                                                       

                                                    </tbody>
                                                </table>
                                                <div class="noresult" style="display: none">
                                                    <div class="text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                            colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                        </lord-icon>
                                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                            orders for you search.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex justify-content-end">
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
                                    </div><!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end col -->
                        </div>


























              

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

             
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

     

      

     </x-dash>