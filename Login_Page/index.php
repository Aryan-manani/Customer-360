<?php
$login=false;
$showerr=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $username=$_POST["username"];
    $pswd=$_POST["password"];

    $sql="SELECT * from users WHERE username='$username' AND password='$pswd'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location: ../Listing_Page/index.php");
    }
    else{
        $showerr="Invalid Credentials";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Customer 360</title>
</head>

<body>
    <?php
    function phpAlert($msg) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <center><strong>Error! </strong>'.$msg.'
        </center>
        </div>';
    }
    ?>

    <?php
        if($showerr){
            phpAlert($showerr);
        }
    ?>
    <div class="container">
        <img src="lamp.jpg" class="img-fluid lamp" alt="lamp">
    </div>

    <div class="container flex">
        <div class="flex-item-1">
            <div class="container flex text-center" style="flex-direction: column;">
                <div class="container">
                    <img src="Logo.png" class="img-fluid logo" alt="Logo">
                </div>
                <div class="container mb-3">
                    <h1>Customer.io</h1>
                </div>
            </div>
            <div class="container">
                <form action="index.php" method="post">
                    <div class="form-outline mb-2">
                        <h4>
                            <label class="form-label " for="username">Username</label>
                        </h4>
                        <input type="text" id="username" name="username" class="form-control" />
                    </div>
                    <div class="form-outline mb-2">
                        <h4>
                            <label class="form-label" for="password">Password</label>
                        </h4>
                        <input type="password" id="password" name="password" class="form-control" />
                    </div>
                    <div class="container mb-4">
                        <div class="forgot-password">
                            <a href="#!" style="text-decoration: none; color:black">Forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning submit btn-block">Login</button>
                </form>
            </div>
        </div>
        <div class="flex-item-2">
            <img src="man.jpg" class="img-fluid man" alt="man">
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>