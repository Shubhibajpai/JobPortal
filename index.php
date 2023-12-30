<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="style.css">
    <title>Job Protal (project)</title>
    
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">JOB PORTAL</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a onclick="window.location.href='index.php';">Home</a></li>
                    <li><a onclick="window.location.href='Admin.php';" >Admin</a></li>
                    <li><a onclick="window.location.href='Job Seeker.php';">Job Seeker</a></li>
                    <li><a onclick ="window.location.href='Job Provider.php';">Job Provider</a></li>
                    <li><a onclick="window.location.href='Contact Us.php';">Contact Us</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="find your Drearm">
                <a href="#"> <button class="btn">Find</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Probing... <br><span>Dream Job ??</span> <br> We Can Help You..</h1>
            <br>
                <button class="cn"><a href="signform.php">Register Now</a></button>
                <button class="cn"><a href="logout.php">Log Out</a></button>

                <div class="form">
                    <h2>Login Here</h2>
                    <form method="post">
                    <input type="email" name="em" required placeholder="Enter Email Here">
                    <input type="password" name="ps" required placeholder="Enter Password Here">
                    <input type="submit" class="btnn" value="login" name="button">
                    </form>
                    <?php
                    include('Connection.php');
                     if(isset($_POST['button']))
                     {
                        $Em=$_POST['em'];
                        $pw=$_POST['ps'];
                       $query="SELECT * from userdetails where Email='$Em' AND EPassword='$pw'";
                       $run=mysqli_query($con,$query);
                       $rowcount=mysqli_num_rows($run);
                       if($rowcount==true)
                       {
                        session_start();
                         $_SESSION["USE"]=$Em;
                         echo "<script>alert('Login Successfully');
            window.location.href='index.php'
            </script>";
                       }
                         else
                         {
                            echo "Invalid Password or Email";
                         }
                     }
                    ?>

                    <p class="link">Don't have an account<br>
                    <a onclick="window.location.href='signform.php';">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>
                    <div class="icons">
                        <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://www.instagram.com"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://twitter.com/i/flow/login"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="https://wwww.google.com"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="htpps://wwww.skype.com"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </div>
                    </div>
                </div>
        </div>
    
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>