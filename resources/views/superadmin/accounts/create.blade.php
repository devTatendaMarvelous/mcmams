@extends('layouts.dash')
@section('content')
 <div class="main-content">
        <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Account Create</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Member</a></li>
                                        <li class="breadcrumb-item active">Account</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    

                    <div class="row   ">
                        <div class="col-lg-12  ">
                           <form action="/accounts/{{ $id }}/store" method="POST">
                               <div class="card  ">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Open An Account For {{ $member->name }}</h4>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Basic Input</label>
                                                    <input type="password" class="form-control" id="basiInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Input with Label</label>
                                                    <input type="password" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Input with
                                                        Placeholder</label>
                                                    <input type="password" class="form-control" id="placeholderInput"
                                                        placeholder="Placeholder">
                                                </div>
                                            </div>
                                            <!--end col-->T
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="valueInput" class="form-label">Input with Value</label>
                                                    <input type="text" class="form-control" id="valueInput"
                                                        value="Input value">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="readonlyPlaintext" class="form-label">Readonly Plain
                                                        Text Input</label>jigjrgjoijrr
                                                    <input type="text" class="form-control-plaintext"
                                                        id="readonlyPlaintext" value="Readonly input" readonly>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="readonlyInput" class="form-label">Readonly Input</label>
                                                    <input type="text" class="form-control" id="readonlyInput"
                                                        value="Readonly input" readonly>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="disabledInput" class="form-label">Disabled Input</label>
                                                    <input type="text" class="form-control" id="disabledInput"
                                                        value="Disabled input" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconInput" class="form-label">Input with Icon</label>
                                                    <div class="form-icon">
                                                        <input type="email" class="form-control form-control-icon"
                                                            id="iconInput" placeholder="example@gmail.com">
                                                        <i class="ri-mail-unread-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Input with Icon
                                                        Right</label>
                                                    <div class="form-icon right">
                                                        <input type="email" class="form-control form-control-icon"
                                                            id="iconrightInput" placeholder="example@gmail.com">
                                                        <i class="ri-mail-unread-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Input Date</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputtime" class="form-label">Input Time</label>
                                                    <input type="time" class="form-control" id="exampleInputtime">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputpassword" class="form-label">Input
                                                        Password</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputpassword" value="44512465">
                                                </div>
                                            </div>
                                            <!--end col-->
                                         
                                            
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="firstnamefloatingInput"
                                                        placeholder="Enter your firstname">
                                                    <label for="firstnamefloatingInput">Floating Input</label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                             <div class="hstack gap-2 justify-content-end">
                                                
                                                  <input type="submit" class="btn btn-success" value="Add" >
                                             </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    
                                </div>
                            </div>

                           </form>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
        </div>
     </div>

@endsection