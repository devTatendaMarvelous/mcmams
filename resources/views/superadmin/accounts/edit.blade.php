<x-dash>
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
                           <form action="/accounts/{{ $account->id }}/update" method="POST">
                               <div class="card  ">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Open An Account For </h4>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        @csrf
                                        <div class="row g-3">
                                            
                                            <div class="col-md-6">
                                                <div>
                                                    <label for="lastName" class="form-label">Principal</label>
                                                    <input type="number" class="form-control"name="principal" value="{{ $account->principal }}" id="lastName" placeholder="$0.00" required>
                                                </div>
                                            </div><!--end col-->
                                            
                                            <div class="col-md-3">
                                                <label for="lastName" class="form-label">Billing Group</label>
                                                <select name="billinggroup" class="form-control" id="">
                                                    
                                                    <option value="">{{ $account->billinggroup }}</option>
                                                    
                                                </select>
                                            </div><!--end col-->

                                                <div class="col-md-3">
                                                <label for="lastName" class="form-label">Account Status</label>
                                                <select name="status" class="form-control" id="">
                                                    
                                                    <option value="{{ $account->status }}">{{ $account->status }}</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Waiting">Waiting</option>
                                                    <option value="Suspended">Suspended</option>
                                                </select>
                                            </div><!--end col-->
                                            
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
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

</x-dash>