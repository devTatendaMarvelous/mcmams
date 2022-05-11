@extends('layouts.dash')
@section('content')
 <div class="main-content">
        <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Make Payment</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Payment</a></li>
                                        <li class="breadcrumb-item active"></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    

                    <div class="row   ">
                        <div class="col-lg-12  ">
                           <form action="/payments/{{ $id }}/store" method="POST">
                               <div class="card  ">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Payment </h4>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        @csrf
                                                                    <div class="row g-3">
                                                                      
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="lastName" class="form-label">Amount</label>
                                                                                <input type="number" class="form-control"name="amount" id="lastName" placeholder="$0.00" required>
                                                                            </div>
                                                                        </div><!--end col-->
                                                                        
                                                                       <div class="col-xxl-3">
                                                                           <label for="lastName" class="form-label">Referrence Number</label>
                                                                           <input type="text" name="referrence" placeholder="Referrence Number" class="form-control" >
                                                                        </div><!--end col-->

                                                                         <div class="col-xxl-3">
                                                                           <label for="lastName" class="form-label">Purpose</label>
                                                                           <select name="purpose" class="form-control" id="">
                                                                                
                                                                                <option value="Contribution">Contribution</option>
                                                                                <option value="Penalty">Penalty</option>
                                                                                <option value="Advance">Advance</option>
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

@endsection