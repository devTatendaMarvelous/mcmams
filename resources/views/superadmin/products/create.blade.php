<x-dash>
     
     <div class="container py-5 mt-5">
          <div class="card">
               <div class="card-body">
                      <div class=" p-3">
                                                        <h5 class="modal-title" >Add Product</h5>
                                                        
                                                    </div>
                                                    <form action="/products/store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                           
                                                            <div class="row g-3">
                                                                <div class="col-md-5">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Name</label>
                                                                        <input type="text" id="customername-field" name="name" class="form-control" placeholder="Enter name"  />
                                                                        @error('name')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                  <div class="col-md-5">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Contribution</label>
                                                                        <input type="number" id="customername-field" name="contribution" class="form-control" placeholder="Enter Contribution"  />
                                                                         @error('initials')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                 
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                               
                                                                <input type="submit" class="btn btn-success" value="Add" >
                                                            </div>
                                                        </div>
                                                    </form>
               </div>
          </div>
     </div>
                                                  
                                                
</x-dash>