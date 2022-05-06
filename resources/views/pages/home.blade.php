@extends('layouts.dash')
@section('content')
   <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                       <!------ Include the above in your HEAD tag ---------->
               @if (Auth::user()->role=="Member")
            
                   <div class="text-center mt-5">
                    <h1>Welcome New User you currently have no privilledges yet. kindly contact the Admin for the previlledges!!!</h1>
                   </div>
               @else
                  

                       @if (Auth::user()->role=='SuperAdmin')
                           <div class=" col-sm-10 col-12">
                           <div class="card">
                               <div class="card-body">
                               <canvas id="myChart" ></canvas>
                                <script>
                                const ctx = document.getElementById('myChart').getContext('2d');
                                const myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Suspended', 'Opened', 'Waiting period', 'Active'],
                                        datasets: [{
                                            label: 'Medical Aid Accounts',
                                            data: [3, 7, 8,25,],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                                </script>

                               </div>
                           </div>
                       </div>
                       @endif

                   </div>
               @endif

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

                   @endsection