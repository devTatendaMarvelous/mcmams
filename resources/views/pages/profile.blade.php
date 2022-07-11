<x-dash>
    <!-- ====================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                            <div class="overlay-content">
                                <div class="text-end p-3">
                                    {{-- <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                        <input id="profile-foreground-img-file-input" type="file"
                                            class="profile-foreground-img-file-input">
                                        <label for="profile-foreground-img-file-input"
                                            class="profile-photo-edit btn btn-light">
                                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                        </label>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img src="{{ asset('/storage/profilePhotos/'.Auth::user()->photo) }}"
                                                class="rounded-circle avatar-xl img-thumbnail user-profile-image  shadow"
                                                alt="user-profile-image">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input id="profile-img-file-input" type="file"
                                                    class="profile-img-file-input">
                                                <label for="profile-img-file-input"
                                                    class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body shadow">
                                                        <i class="ri-camera-fill"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="fs-16 mb-1">{{ auth::user()->name }}</h5>
                                        <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            
                        </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails"
                                                role="tab">
                                                <i class="fas fa-home"></i>
                                                Personal Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                                <i class="far fa-user"></i>
                                                Change Password
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <form action="/profile/{{ auth::user()->id }}/edit" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">First
                                                                Name</label>
                                                            <input type="text" class="form-control" id="firstnameInput"
                                                                placeholder="Enter your firstname"  name="name" value="{{ auth::user()->name }}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Email
                                                                Address</label>
                                                            <input type="email" class="form-control" id="emailInput"
                                                                placeholder="Enter your email" name="email"
                                                                value="{{ auth::user()->email }}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                   
                                                   
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="designationInput"
                                                                class="form-label">Designation</label>
                                                            <input type="text" class="form-control"
                                                                id="designationInput" placeholder="Designation"
                                                                value="{{ auth::user()->role }}" readonly>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                   
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <input type="submit"
                                                                class="btn btn-primary" value="Update">
                                                         
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane" id="changePassword" role="tabpanel">
                                            <form action="/profile/{{ auth::user()->id }}/password" method="POST">
                                                @csrf
                                                <div class="row g-2">
                                                    
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="newpasswordInput" class="form-label">New
                                                                Password*</label>
                                                            <input type="password" class="form-control"
                                                            name="new"
                                                            required
                                                                id="newpasswordInput" placeholder="Enter new password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="confirmpasswordInput" class="form-label">Confirm
                                                                Password*</label>
                                                            <input type="password" class="form-control"
                                                                id="confirmpasswordInput"
                                                                name="confirm" required
                                                                placeholder="Confirm password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <a href="javascript:void(0);"
                                                                class="link-primary text-decoration-underline">Forgot
                                                                Password ?</a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <input type="submit" class="btn btn-success" value="Change Password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                            
                                        </div>
                                        <!--end tab-pane-->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div><!-- End Page-content -->


        </x-dash>