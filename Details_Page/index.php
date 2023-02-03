<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: ../Login_Page/index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customer 360 Details Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand mx-3" href="index.php">
            <img class="navbar-brand logo" src="Logo.avif" alt="Logo" width="130px" height="65px">
        </a>

        <div class="nav-end-content" id="navbarSupportedContent">
            <div class="col-auto end_content">
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

    <div class="row" style="display: flex;">
        <div class="col-sm-auto">
            <div class="card customer">
                <div class="card-header">
                    <h4>
                        Customer Details
                    </h4>
                </div>
                
                <?php
                include_once("customer_details.php");
                ?>
                <div class="card-body px-1 py-1" style="display: flex;">
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Customer Name
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_Name"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx- my-1 px-2 py-2">
                        <div class="fw-bold">
                            Customer ID
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_ID"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Date of Birth
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_date_of_birth"];
                            ?>
                        </div>
                    </div>
                </div>

                <div class="card-body px-1 py-1" style="display: flex;">
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Customer Email-ID
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_email_id"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Contact Number
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_contact_number"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Customer Income
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_income"];
                            ?>
                        </div>
                    </div>
                </div>

                <div class="card-body px-1 py-1" style="display: flex ;">
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Customer Occupation
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_occupation"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Pincode
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_pincode"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx-1 my-1 px-1 py-1">
                        <div class="fw-bold">
                            Address
                        </div>
                        <div>
                            <?php
                            echo $row["Customer_address"];
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Agent Details-->
        <div class="col-sm-auto">
            <div class="card agent">
                <div class="card-header">
                    <h4>
                        Agent Details
                    </h4>
                </div>
               <?php
               include_once("agent_details.php");
               ?> 
                <div class="card-body px-1 py-1" style="display: flex;">
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Agent Name
                        </div>
                        <div>
                            <?php
                            echo $row["Agent_name"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Agent ID
                        </div>
                        <div>
                            <?php
                            echo $row["Agent_id"];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="card-body px-1 py-1" style="display: flex;">
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Agent Contact Number
                        </div>
                        <div>
                            <?php
                            echo $row["Agent_contact_number"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Birth Date
                        </div>
                        <div>
                            <?php
                            echo $row["Agent_birth_date"];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="card-body px-1 py-1" style="display: flex;">
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Agent Email-ID
                        </div>
                        <div>
                            <?php
                            echo $row["Agent_email_id"];
                            ?>
                        </div>
                    </div>
                    <div class="container mx-1 my-1 px-2 py-2">
                        <div class="fw-bold">
                            Agent Status
                        </div>
                        <div>
                            <?php
                            echo $row["Agent_status"];
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Account Details -->
    <div class="card account">
        <div class="card-header">
            <h4>
                Account Details
            </h4>
        </div>
        <?php
        include_once("account_details.php");
        ?>
        <div class="card-body px-1 py-1" style="display: flex;">
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Account Holder Name
                </div>
                <div>
                    <?php
                    echo $row["Account_holder_name"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Account Number
                </div>
                <div>
                <?php
                    echo $row["Account_number"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Bank Name
                </div>
                <div>
                <?php
                    echo $row["Bank_name"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Branch Name
                </div>
                <div>
                <?php
                    echo $row["Branch_name"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Account Type
                </div>
                <div>
                <?php
                    echo $row["Account_type"];
                    ?>
                </div>
            </div>
        </div>

        <div class="card-body px-1 py-1" style="display: flex;">
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Client Code
                </div>
                <div>
                <?php
                    echo $row["Client_code"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    MICR Code
                </div>
                <div>
                <?php
                    echo $row["MICR_code"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Policy Number
                </div>
                <div>
                <?php
                    echo $row["Policy_number"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    IFSC Code
                </div>
                <div>
                <?php
                    echo $row["IFSC_code"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Nominee Name
                </div>
                <div>
                <?php
                    echo $row["Nominee_name"];
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Policy Details-->
    <div class="card policy">
        <div class="card-header">
            <h4>
                Policy Details
            </h4>
        </div>
        <?php
        include_once("policy_details.php");
        ?>
        <div class="card-body px-1 py-1" style="display: flex;">
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Policy Number
                </div>
                <div>
                <?php
                    echo $row["Policy_number"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Proposal Number
                </div>
                <div>
                <?php
                    echo $row["Proposal_number"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Application Date
                </div>
                <div>
                <?php
                    echo $row["Application_date"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Issuance Date
                </div>
                <div>
                <?php
                    echo $row["Issuance_date"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Premium Amount
                </div>
                <div>
                <?php
                    echo $row["Premium_amount"];
                    ?>
                </div>
            </div>
        </div>

        <div class="card-body px-1 py-1" style="display: flex;">
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Policy Status
                </div>
                <div>
                <?php
                    echo $row["Policy_status"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Policy Term
                </div>
                <div>
                <?php
                    echo $row["Policy_term"];
                    ?>
                    Years
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Last Premium Paid
                </div>
                <div>
                <?php
                    echo $row["Last_premium_amount_paid"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Last Premium Paid Date
                </div>
                <div>
                <?php
                    echo $row["Last_premium_paid_date"];
                    ?>
                </div>
            </div>
            <div class="container mx-1 my-1 px-2 py-2">
                <div class="fw-bold">
                    Next Premium Due Date
                </div>
                <div>
                <?php
                    echo $row["Next_premium_due_date"];
                    ?>
                </div>
            </div>
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
    <script src="./Listing_page/script.js"></script>
    

</body>

</html>