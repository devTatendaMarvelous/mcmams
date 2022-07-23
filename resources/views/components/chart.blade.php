
                           <div class=" col-sm-10 col-12">
                           <div class="card">
                               <div class="card-body">
                               <canvas id="myChart"  style="max-height:900; " ></canvas>
                                <script>
                                const ctx = document.getElementById('myChart').getContext('2d');
                                const myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Suspended', 'Opened', 'Waiting period', 'Active','Members'],
                                        datasets: [{
                                            label: 'Medical Aid Accounts',
                                            data: [5, 45, 8,25,67],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(75, 192, 19, 1)',
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(75, 192, 19, 1)',
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    
                                    options: {
                                        animations: {
      tension: {
        duration: 3000,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
    },
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                },);

                                
                                </script>

                               </div>
                           </div>
                       </div>