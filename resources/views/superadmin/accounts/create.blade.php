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
                                      

                                                <!-- Open Account Modal -->

                                                <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                {{ $member->id }}
                                                                <h5 class="modal-title" id="exampleModalgridLabel">Open An Account For {{ $member->name }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/accounts/{{ $member->id }}/store" method="POST">
                                                                    @csrf
                                                                    <div class="row g-3">
                                                                        {{-- <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="firstName" class="form-label">Global Limit</label>
                                                                                <input type="number" class="form-control" name="global"id="firstName" placeholder="$0.00" required>
                                                                            </div>
                                                                        </div><!--end col--> --}}
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="lastName" class="form-label">Principal</label>
                                                                                <input type="number" class="form-control"name="principal" id="lastName" placeholder="$0.00" required>
                                                                            </div>
                                                                        </div><!--end col-->
                                                                        
                                                                       <div class="col-xxl-3">
                                                                           <label for="lastName" class="form-label">Billing Group</label>
                                                                           <select name="billinggroup" class="form-control" id="">
                                                                                
                                                                                <option value="">Billing Group</option>
                                                                                <option value="principal">Principal</option>
                                                                                <option value="spouse">Spouse</option>
                                                                                <option value="child">child</option>
                                                                                <option value="senior">Senior</option>
                                                                           </select>
                                                                        </div><!--end col-->
                                                                       
                                                                        <div class="col-lg-12">
                                                                            <div class="hstack gap-2 justify-content-end">
                                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </div><!--end col-->
                                                                    </div><!--end row-->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
{{-- ========================================================Open Account Modal End============================================================================================================= --}}

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
        </div>
     </div>

@endsection