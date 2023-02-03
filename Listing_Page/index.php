<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: ../Login_Page/index.php");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <title>Customer 360 Listing Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand mx-3" href="index.php">
            <img class="navbar-brand logo" src="Logo.avif" alt="Logo" width="130px" height="65px">
        </a>

        <div class="nav-end-content" id="navbarSupportedContent">
            <div class="col-auto end_content me-4">
                <ul class="items">
                    <li class="nav-item col-auto">
                        <img class="navbar-brand" src="Face.jpg" alt="Face" width="45px">
                    </li>
                    <li class="nav-item col-auto">
                        <span class="navbar-text" style="color:black;  font-weight: bold;">
                            <?php echo $_SESSION['username'] ?>
                        </span>
                        <div class="dropdown container">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" style=" width: 30px; height: 20px;">
                            </button>
                            <div class="dropdown-menu" style="min-width: 15px;">
                                <a class="dropdown-item" href="../Login_Page/logout.php" style="width:100px;">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container Listings text-center">
        <h2 class="mt-2 mb-2 fw-bold">Customer Listings</h2>
        <div class="col-md-12">
                <table id="example" class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Customer Name</th>
                            <th>Mobile Number</th>
                            <th>Policy Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php 
                            include("details.php");
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
    

    <footer class="footer text-center text-lg-start">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="Links">
          <!--Grid column-->
          <div class="Links-1">
            <h6 class="text-uppercase font-weight-bold mb-2" style="color: rgb(0, 0, 194); font-size: larger;">Services</h6>
            <ul class="list-unstyled mb-0">
              <li class=""><a href="https://www.anblicks.com/services/cloudops/" class="text-muted" target="_blank" style="text-decoration: none;">CloudOps</a></li>
              <li class=""><a href="https://www.anblicks.com/services/data-analytics/" class="text-muted" target="_blank" style="text-decoration: none;">Data Analytics</a></li>
              <li class=""><a href="https://www.anblicks.com/services/modern-apps/" class="text-muted" target="_blank" style="text-decoration: none;">Modern Apps</a></li>
            </ul>
          </div>    
          <div class="Socials">
            <h5 style="color: rgb(0, 0, 194);">Connect with Us</h5>
            <a href="https://www.facebook.com/anblicksofficial/" title="linkedin icons" style="text-decoration: none;" target="_blank"><img src="facebook.png" alt="Facebook" style="height: 30px;"></a>
            <a href="https://twitter.com/anblicks_sols" title="linkedin icons" style="text-decoration: none;" target="_blank"><img src="twitter.png" alt="Twitter" style="height: 30px;"></a>
            <a href="https://www.youtube.com/channel/UClMYPVQEDzbi0500gO7XA6w" title="linkedin icons" style="text-decoration: none;" target="_blank"><img src="youtube.png" alt="Youtube" style="height: 30px;"></a>
            <a href="https://www.linkedin.com/company/anblicks/" title="linkedin icons" style="text-decoration: none;" target="_blank"><img src="linkedin.png" alt="LinkedIn" style="height: 30px;"></a>
          </div>
          <div class="Links-2">
            <h6 class="text-uppercase font-weight-bold mb-2" style="color: rgb(0, 0, 194); font-size: larger;">Company</h6>
            <ul class="list-unstyled mb-0">
              <li class=""><a href="https://www.anblicks.com/about-us/" class="text-muted" target="_blank" style="text-decoration: none;">About Us</a></li>
              <li class=""><a href="https://www.anblicks.com/careers/" class="text-muted" target="_blank" style="text-decoration: none;">Career Overview</a></li>
              <li class=""><a href="https://www.anblicks.com/blog/" class="text-muted" target="_blank" style="text-decoration: none;">Blog</a></li>
            </ul>
          </div>
        </div>        
      </div>

      <div class="container p-1 pb-0">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Subscribe to our newsletter</strong>
                </p>
              </div>
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form5Example27" class="form-control" placeholder="Email address"/>
                </div>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-4">
                  Subscribe
                </button>
              </div>
            </div>
          </form>
      </div>
      
      <!-- Copyright -->
      <div class="text-center p-3">
        © Copyright 2022 Anblicks. All rights reserved. Various trademarks held by their respective owners.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>    
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>    
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>    
    <script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>  
    <script>
        $(document).ready(function () {
            var table = $('#example').DataTable({
                fixedHeader: true
            });
        });
    </script>  
    <script src="script.js"></script>
</body>

</html>