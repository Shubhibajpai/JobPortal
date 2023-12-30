<?php
session_start();
include('Connection.php');
if($_SESSION["USE"]==true)
{
  ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Job Seeker</title>
    <link rel="stylesheet" type="text/css" href="jobseeker.css">
    <link rel="stylesheet" type="text/css" href="jobseeker.js">
  </head>
  <body style="overflow:hidden">
    <header>
      <h1><font size ="+99">Job Seeker</font></h1>
    </header>
    <nav>
      <ul>
        <li><b><a onclick="window.location.href='index.php';">Home</b></a></li>
       
      </ul>
    </nav>
    <main>
      <h2 ><center> Job Seekers</center></h2>
      <p><center><b>Use the buttons below to create your CV or Resume.</b></center></p>
      <div class="choose">
        <form method="post" enctype="multipart/form-data">
          <input type="file" id="myfile" name="ime" required>
      </div>
      <div class="buttons">
      <input type="submit" class="btnn" value="Upload Resume" name="button">
      <input type="submit" class="btnn" value="Upload CV" name="button1">
      </div>
</form>
<?php
    include('Connection.php');
    include('function.php');
    if(isset($_POST['button']))
    {
      $image = upload_image('ime','img/');
      $R="Resume";
      $query="INSERT INTO `jseeker` (`imageA`, `Ftype`) VALUES ('$image','$R')";
      $fire = mysqli_query($con,$query);
      if($fire){
        echo "<script>alert('Record Inserted');
        window.location.href='Job Seeker.php'
        </script>";
      }
    }
    if(isset($_POST['button1']))
    {
      $C="CV";
      $image = upload_image('ime','img/');
      $query="INSERT INTO `jseeker` (`imageA`, `Ftype`) VALUES ('$image','$C')";
      $fire = mysqli_query($con,$query);
      if($fire){
        echo "<script>alert('Record Inserted');
        window.location.href='Job Seeker.php'
        </script>";
      }
    }


?>
    </main>
  </body>
</html>
<?php
}
else
{
  echo "<script>alert('Login First');
  window.location.href='index.php'
  </script>";
}
?>