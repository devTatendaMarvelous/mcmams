<x-dash>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Accounts</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Principal</a></li>
                                            <li class="breadcrumb-item active">Accounts</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row" id="contactList">
                            <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body border border-dashed border-end-0 border-start-0">
                                        <div class="row g-2">
                                            <div class="col-xl-4 col-md-6">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Search to Account...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div><!--end col-->
                                           
                                        </div><!--end row-->
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light text-muted">
                                                    <tr>
                                                        <th class="sort" data-sort="order_date" scope="col">Member No</th>
                                                        <th class="sort" data-sort="currency_name" scope="col">Name</th>
                                                         <th class="sort" data-sort="currency_name" scope="col">Initials</th>
                                                          <th class="sort" data-sort="currency_name" scope="col">Surname</th>
                                                        <th class="sort" data-sort="type" scope="col">Email</th>
                                                        <th class="sort" data-sort="quantity_value" scope="col">Medical Aid Plan</th>
                                                        <th class="sort" data-sort="order_value" scope="col">Contribution</th>
                                                        <th class="sort" data-sort="avg_price" scope="col">Global Limit</th>
                                                        <th class="sort" data-sort="avg_price" scope="col">Claimed</th>
                                                         <th class="sort" data-sort="avg_price" scope="col">Balance</th>
                                                        <th class="sort" data-sort="status" scope="col">Status</th>
                                                        <th class="sort" data-sort="status" scope="col">Action</th>
                                                    </tr>
                                                </thead><!--end thead-->
                                                <tbody class="list form-check-all">
                                                  
                                                    @forelse ($accounts as $account)
                                                        <tr>
                                                        <td class="order_date">{{ $account->memberno }} </td> 
                                                        
                                                        <td>
                                                          {{ $account->name }}
                                                        </td>
                                                        <td>
                                                          {{ $account->initials }}
                                                        </td>
                                                        <td>
                                                          {{ $account->surname }}
                                                        </td>
                                                        <td class="type ">{{ $account->email }}</td> 
                                                        <td class="quantity_value">Basic Care</td>
                                                        <td class="order_value">{{ $account->contribution }}</td>
                                                        <td class="avg_price">{{ $account->limit }}</td>
                                                         <td class="avg_price">{{ $account->claimed }}</td>
                                                       <td class="avg_price">{{ $account->balance }}</td>
                                                        <td class="status">
                                                             @if ($account->status=='ACTIVE')
                                                                <h2
                                                                class="badge badge-soft-success text-uppercase">{{ $account->status }}</h2></td>
                                                                @elseif ($account->status=='')
                                                                <h2
                                                                class="badge badge-soft-info text-uppercase">{{ $account->status }}</h2></td>
                                                                 @elseif ($account->status=='Waiting')
                                                                <h2
                                                                class="btn badge-soft-warning text-uppercase">{{ $account->status.' Period' }}</h2></td>
                                                                 @elseif ($account->status=='WAITING')
                                                                <h2
                                                                class="btn btn-warning text-uppercase">{{ $account->status.' Period' }}</h2></td>
                                                                 @elseif ($account->status=='Suspended')
                                                                <h2
                                                                class="badge badge-soft-danger text-uppercase">{{ $account->status }}</h2></td>
                                                            @endif 
                                                            <td class="avg_price">
                                                                <a href="/payments/{{ $account->id }}/create"><i class="ri-cash-fill text-info"> Pay</i> </a><br>
                                                                    <a href="/accounts/{{ $account->id }}/edit" class="mr-5"><i class="ri-edit-2-line  "></i> Edit</a><br>
                                                         
                                                        </td>
                                                            
                                                        
                                                    </tr><!--end tr-->
                                                 
                                                        
                                                    @empty
                                                        
                                                    @endforelse
                                                </tbody>
                                            </table><!--end table-->
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"  colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ orders We did not find any orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="#">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
                        
                    </div>
                    <!-- container-fluid -->
                </div>
            </div>
                <!-- End Page-content -->
</x-dash>