<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/report.css">
 
  <title>Reports</title>
</head>
<body>
  <div class="grid-container">
  <?php
  include("header.php");
  include("sidebar.php");
  ?>

  <main class="main-container">
    <div class="container-fluid px-4">
      <h1 class="mt-4">Report</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Report</li>
      </ol>
    </div>


        
            <div class="charts">
              <div class="charts-card">
                <p class="chart-title">Top 5 events</p>
                <div id="bar-chart"></div>

                </div>
            
              <div class="charts-card">
                <p class="chart-title">Payment and bookings</p>
                <div id="area-chart"></div>

                </div>
            </div>

                
              </div>
            </div>
    
      </div>
    
</main>

 
</div>

<?php
include('footer.php');
?>
</body>
</html>