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
                                    <h4 class="mb-sm-0">Members</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Members</a></li>
                                            <li class="breadcrumb-item active">Add Dependend</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            
                            <div class="col-xxl-12">
                                <div class="card" id="contactList">
                                    <div class="card-header">
                                        
                                  
                                       
                                        <div class="" 
                                            >
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0">
                                                    <div class="modal-header bg-soft-info p-3">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                    </div>
                                                    <form action="/dependends/{{ $id }}/store" method="POST">
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
                                                                <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                                <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end delete modal -->

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

        


      @endsection