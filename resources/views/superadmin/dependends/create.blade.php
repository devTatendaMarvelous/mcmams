<x-dash>
     
     <div class="container  t-5">
         <div class="page-content">
                <div class="container-fluid">
          <div class="card">
               <div class="card-body">
                      <div class=" p-3">
                                    <h5 class="modal-title" >Add Member</h5>
                                                        
                                                    </div>
                                                    <form action="/dependends/{{$id}}/store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                           
                                                            <div class="row g-3">

                                                              
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Name</label>
                                                                        <input type="text" id="customername-field" name="name" class="form-control" placeholder="Enter name"  />
                                                                        @error('name')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                 
                                                                 <div class="col-md-6">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Surname</label>
                                                                        <input type="text" id="customername-field" name="surname" class="form-control" placeholder="Enter surname"  />
                                                                         @error('surname')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                              
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">Date Of Birth</label>
                                                                        <input type="date" id="customername-field" name="dob" class="form-control" placeholder="Enter name"  />
                                                                         @error('dob')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                 <div class="col-md-6">
                                                                    <div>
                                                                        <label for="name-field" class="form-label">National ID</label>
                                                                        <input type="text" id="customername-field" name="natId" class="form-control" placeholder="National ID"  />
                                                                         @error('natId ')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                 

                                                                <div class="col-md-5">
                                                                    <div>
                                                                        <label for="email_id-field" class="form-label">Email </label>
                                                                        <input type="email" id="email_id-field" class="form-control" name="email"  placeholder="Enter email"  />
                                                                         @error('email')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div>
                                                                        <label for="phone-field" class="form-label">Phone</label>
                                                                        <input type="number" id="phone-field" class="form-control" name="phone" placeholder="Enter phone no"  />
                                                                         @error('phone')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-2">
                                                                    <div><label for="lead_score-field" class="form-label">Sex</label>
                                                                        <select name="sex" id="" class="form-control" >
                                                                            <option value="">Sex</option>
                                                                            <option value="M">Male</option>
                                                                            <option value="F">Female</option>
                                                                            
                                                                        </select>
                                                                         @error('sex')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                 <div class="col-md-6">
                                                                    <div>
                                                                        <label for="lead_score-field" class="form-label">Any Medical Ailments ( <strong><i>comma seperated</i></strong> )</label>
                                                                        <textarea name="ailments" id="" cols="30" class="form-control"  placeholder="Any Medical Ailments..... to be comma ',' seperated"  rows="10"></textarea>
                                                                        
                                                                    

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <label for="lead_score-field" class="form-label">Address</label>
                                                                         @error('address')
                                                                         <p><small class="text-danger"><em>{{ $message }}</em></small>
                                                                        @enderror
                                                                        <textarea name="address" id="" cols="30" class="form-control"  placeholder="Address"  rows="10"></textarea>
                                                                    

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
            
      </div>
     </div>
                                                
</x-dash>