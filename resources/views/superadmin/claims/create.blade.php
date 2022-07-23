<x-dash>
 <div class="main-content">
        <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create claim </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Claim</a></li>
                                        <li class="breadcrumb-item active"></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    

                    <div class="row   ">
                        <div class="col-lg-12  ">
                           <form action="/claims/{{ $id }}/store" method="POST">
                               <div class="card  ">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Claim </h4>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        @csrf
                                            <div class="row g-3">
                                                 <div class="col-md-6">
                                                    <div>
                                                        <label for="last Name" class="form-label">Provider</label>
                                                        <input type="text" class="form-control"name="provider" id="lastName" placeholder="Enter Provider" >


                                                           @error('provider')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    
                                                    </div>
                                                </div><!--end col-->
                                                   <div class="col-md-6">
                                                    <div>
                                                        <label for="last Name" class="form-label">Referrence</label>
                                                        <input type="text" class="form-control"name="referrence" id="lastName" placeholder="Enter Referrence" >
                                                           @error('referrence')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    
                                                    </div>
                                                </div><!--end col-->
                                                   
                                                <div class="col-md-6">
                                                    <div>
                                                        <label for="last Name" class="form-label">Amount</label>
                                                        <input type="number" class="form-control"name="amount" id="lastName" placeholder="$0.00" >
                                                                @error('amount')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    
                                                    </div>
                                                </div><!--end col-->
                                                   <div class="col-md-6">
                                                    <div>
                                                        <label for="lastName" class="form-label">Description</label>
                                                         <textarea name="description" id=""  class="form-control"  placeholder="Claim Description ',' seperated"  rows="3"></textarea>
                                                                 @error('description')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    
                                                    </div>
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