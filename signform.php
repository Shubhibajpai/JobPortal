<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signform</title>
</head>
<link rel="stylesheet" href="signform.css">
<body>
    <div class="main">
    <div class="head">
    <h1>Signup Form</h1>
    </div>
    
    <div class="form">
        <form method="post">
            <input type="text" name=Fn placeholder="First Name" class="fn">
            <input type="text" name=Ln placeholder="Last Name" class="ln" style="left:323px"><br>
            <input type="email" name=Em placeholder="Email"  class="e"><br>
            <input type="email" name=Cm placeholder="Confirm Email" class="ce"><br>
            <input type="text" name=Pass placeholder="Password" class="p"><br>
            <input type="text" name= Cp placeholder="Confirm Password" class="cp"><br>
            <input type="submit" value="Signup" name="button" class="s">
        </form>
        </div>
        <?php
        include('Connection.php');
       if(isset($_POST['button']))
       {
        $fn=$_POST['Fn'];
        $ls=$_POST['Ln'];
         $em=$_POST['Em'];
         $pd=$_POST['Pass'];
         $cpd=$_POST['Cp'];
         $cem=$_POST['Cm'];
         $fire="SELECT * FROM userdetails";
         $run=mysqli_query($con,$fire);
         if(mysqli_num_rows($run)>0){
           while($row=mysqli_fetch_assoc($run))
           {
             $ema=$row['Email'];
           }
         }
         if($em==$ema)
         {
            echo "<script>alert('User Already Exist');
            window.location.href='index.php'
            </script>";
         }
         else if($pd==$cpd AND $em==$cem)
         {
$query="INSERT INTO `userdetails` (`FullName`,`LastName`,`Email`,`EPassword`) VALUES ('$fn','$ls','$em','$pd')";
         $run=mysqli_query($con,$query);
         echo "<script>alert('Account Created Successfully');
         window.location.href='index.php'
         </script>";
     }
     else{
       echo "<script>alert('Password Or Email Not Match')</script>";
         }
     }

        ?>
    
    </div>
    <footer>
        <p>&copy;<b><center>swadhashukla42@gmail.com</center></b></p>
         <p>&copy;<b><center>bajpaishubhi51@gmail.com</center></b></p>
      </footer>
</body>
</body>
</html>