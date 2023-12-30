<?php
session_start();
include('Connection.php');
if($_SESSION["USE"]==true)
{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Job Provider.css">
</head>
<body style="overflow:hidden">
        <header>
            <h1><font size ="+99">Job Provider</font></h1>
          </header>
          <nav>
            <ul>
              <li><b><a onclick="window.location.href='index.php';">Home</b></a></li>
             
            </ul>
          </nav>
          <main>
            <h2 ><center> Job Provider</center></h2>
            <p><center><b>Use the buttons below to Update your Details</b></center></p>
            <div class="choose">
                <form method="post" enctype="multipart/form-data">
                  <input type="file" id ="myfile" name="ime" required>
              </div>
              <div class="buttons">
              <input type="submit" class="btnn" value="Upload Company Details" name="button">
    </div>
    <?php
    include('Connection.php');
    include('function.php');
    if(isset($_POST['button']))
    {
      $image = upload_image('ime','img/');
      $query="INSERT INTO `jprovider` (`imageA`) VALUES ('$image')";
      $fire = mysqli_query($con,$query);
      if($fire){
        echo "<script>alert('Record Inserted');
        window.location.href='Job Provider.php'
        </script>";
      }
    }


?>
</form>
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