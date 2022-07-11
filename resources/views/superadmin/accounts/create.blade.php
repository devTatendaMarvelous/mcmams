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
                                      


                                             
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                           
                                                                <h5 class="modal-title" id="exampleModalgridLabel">Open An Account For {{ $member->name }}</h5>
                                                                
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/accounts/{{ $member->id }}/store" method="POST">
                                                                    @csrf
                                                                    <div class="row g-3">
                                                                    
                                                                       <div class="col-md-5"></div>
                                                                        
                                                                       <div class="col-md-3">
                                                                           <label for="lastName" class="form-label">Medial Aid Plan</label>
                                                                           <select name="product_id" class="form-control" id="">
                                                                                
                                                                                
                                                                                <option value="1">Basic Care</option>
                                                                                <option value="2">Main Scheme</option>
                                                                                <option value="3">Platnum</option>
                                                                               
                                                                           </select>
                                                                            @error('product_id')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                        </div><!--end col-->
                                                                       
                                                                        <div class="col-lg-12">
                                                                            <div class="hstack gap-2 justify-content-end">
                                                                             
                                                                                <button type="submit" class="btn btn-primary">Open</button>
                                                                            </div>
                                                                        </div><!--end col-->
                                                                    </div><!--end row-->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
{{-- End============================================================================================================= --}}

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
        </div>
     </div>

</x-dash>