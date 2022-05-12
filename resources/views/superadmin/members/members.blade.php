@extends('layouts.dash')
@section('content')
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
                                    <h4 class="mb-sm-0">{{ count($members) }} Members</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Members</a></li>
                                            <li class="breadcrumb-item active">Principal</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page titl---->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i> Add Member</button>
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
                                                        placeholder="Search for Member">
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
                                                    @forelse ($members as $member )
                                                        
                                                        <tr >
                                                           
                                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                                            <td class="name">{{ $member->name }} </td>
                                                            <td class="company_name">{{ $member->initials }} </td>
                                                            <td class="name">{{ $member->surname }} </td>
                                                            <td class="email_id">{{ $member->dob }}</td>
                                                            <td class="phone">{{ $member->natId }}</td>
                                                            <td class="lead_score">{{ $member->company  }}</td>
                                                            <td class="date">{{ $member->email }}</td>
                                                            <td class="date">{{ $member->phone }}</td>
                                                            <td class="date">{{ $member->sex }}</td>
                                                            <td>
                                                                <ul class="list-inline hstack gap-2 mb-0">
                                                                    
                                                                    <li class="list-inline-item">
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown shadow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-fill align-middle"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                @forelse ($accounts as $account)
                                                                                    @if ($account->ower_id==$member->id<0))
                                                                                    <li><a class="dropdown-item" href="/dependends/{{ $member->id }}/show"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View Dependends</a></li>
                                                                                    <li><a class="dropdown-item" href="/dependends/{{ $member->id }}/add"><i class="ri-add-fill align-bottom me-2 text-muted"></i>Add Depended</a></li>
                                                                              
                                                                                
                                                                                @endif
                                                                                @empty
                                                                                     <li>
                                                                                        <button type="button" class="btn btn-primary-outline" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                                                            <i class="ri-add-fill align-bottom me-2 text-muted"></i> Open Account
                                                                                        </button> 
                                                                                        <a class="dropdown-item" href="/accounts/{{ $member->id }}/open"></a></li>
                                                                               
                                                                                @endforelse
                                                                                
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
                                                                    
                                                                    <h5 class="mt-2"> No Members  Found</h5>
                                                                    <p class="text-muted mb-0">Please Click the add Member Button to Add a mamber.</p>
                                                                </div>
                                                           
                                                        @endforelse
                                                         <div class="noresult" style="display: none">
                                                            <div class="text-center">
                                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                                    colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                                </lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted mb-0">We've searched more than {{ count($members) }}+ members We did not find any
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
                                        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0">
                                                    <div class="modal-header bg-soft-info p-3">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                    </div>
                                                    <form action="/members/create" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <input type="hidden" id="id-field" />
                                                            <div class="row g-3">
                                                                <div class="col-lg-12">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Name</label>
                                                                        <input type="text" id="customername-field" name="name" class="form-control" placeholder="Enter name" required />
                                                                    </div>
                                                                </div>
                                                                 <div class="col-lg-12">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Surname</label>
                                                                        <input type="text" id="customername-field" name="surname" class="form-control" placeholder="Enter surname" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Initials</label>
                                                                        <input type="text" id="customername-field" name="initials" class="form-control" placeholder="Enter initials" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Date Of Birth</label>
                                                                        <input type="date" id="customername-field" name="dob" class="form-control" placeholder="Enter name" required />
                                                                    </div>
                                                                </div>
                                                                 <div class="col-lg-12">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">National ID</label>
                                                                        <input type="text" id="customername-field" name="natId" class="form-control" placeholder="National ID" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div>
                                                                        <label for="company_name-field" class="form-label">Company Name</label>
                                                                        <input type="text" id="company_name-field" name="company" class="form-control" placeholder="Enter company name" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div>
                                                                        <label for="email_id-field" class="form-label">Email </label>
                                                                        <input type="email" id="email_id-field" class="form-control" name="email"  placeholder="Enter email" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div>
                                                                        <label for="phone-field" class="form-label">Phone</label>
                                                                        <input type="number" id="phone-field" class="form-control" name="phone" placeholder="Enter phone no" required />
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-6">
                                                                    <div><label for="lead_score-field" class="form-label">Sex</label>
                                                                        <select name="sex" id="" class="form-control" required>
                                                                            <option value="">Sex</option>
                                                                            <option value="M">Male</option>
                                                                            <option value="F">Female</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-12">
                                                                    <div>
                                                                        <label for="lead_score-field" class="form-label">Address</label>
                                                                        <textarea name="address" id="" cols="30" class="form-control"  placeholder="Address" required rows="10"></textarea>
                                                                    

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <input type="submit" class="btn btn-success" value="Add" >
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!--end add modal-->
                                            
                                      

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

        {{-- ========================================================Delete Member Modal ============================================================================================================= --}}
                                        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <div class="modal-body p-5 text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                        <div class="mt-4 text-center">
                                                            <h4 class="fs-semibold">You are about to delete a contact ?</h4>
                                                            <p class="text-muted fs-14 mb-4 pt-1">Deleting your contact will remove all of your information from our database.</p>
                                                            <div class="hstack gap-2 justify-content-center remove">
                                                                <form action="/members">
                                                                      <a class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                                                        
                                                                      <input type="submit" value="Yes Delete" class="btn btn-danger" >
                                                                </form>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
         {{-- ========================================================Delete Member Modal End============================================================================================================= --}}



      @endsection