@extends('layouts.dash')
@section('content')
<br><br><br><br>

     <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Update {{ $user->name }}</h5>
                    
               </div>
               <div class="modal-body">
                    <form action="/users/{{ $user->id }}/store" method="POST" enctype="multipart/form-data">
                         @csrf

                         <div class="row">
                         <div class="col-lg-12">
                              <div class="mb-3">
                                   <label for="teammembersName" class="form-label">Name</label>
                                   <input type="text" class="form-control" id="teammembersName" name="name" value="{{ $user->name}}">
                              </div>
                         </div>
                         <div class="col-lg-12">
                              <div class="mb-3">
                                   <label for="designation" class="form-label">Email</label>
                                   <input type="text" class="form-control" id="designation" name="email" value="{{ $user->email}}">
                              </div>
                         </div>
                         <div class="col-lg-6">
                              <div class="mb-3">
                                   <label for="totalProjects" class="form-label">Role</label>

                                   <select name="role" class="form-control" id="">
                                        <option value="{{ $user->role }}">{{ $user->role }}</option>
                                         <option value="SuperAdmin">SuperAdmin</option>
                                          <option value="Admin">Admin</option>
                                           <option value="Member">Member</option>

                                   </select>
                                   
                              </div>
                         </div>
                         <div class="col-lg-6">
                              <div class="mb-3">
                                   <label for="formFile" class="form-label">Profile Photo</label>
                                   <input class="form-control" name="photo" type="file" id="formFile">
                              </div>
                         </div>
                         <div class="col-lg-12">
                              <div class="mb-4">
                                   
                                   </div>
                         </div>

                         {{-- hidden inputs --}}
                         
                         <input type="hidden" name="id" value="{{ $user->id }}">


                         {{-- end og hidden inputs --}}

                         <div class="col-lg-12">
                              <div class="hstack gap-2 justify-content-end">
                                  
                                   <button type="submit" class="btn btn-success">Update</button>
                              </div>
                         </div>
                         </div>
                    </form>
               </div>
          </div><!--end modal-content-->
     </div><!--end modal-dialog-->
                                  

@endsection