<?php
session_start();
include('Connection.php');
if($_SESSION["AN"]==true)
{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | By Code Info</title>

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="ht.css"/>
</head>
<body style="overflow:hidden">
  <div class="container">
    <nav>
      <ul>
        <li><a href="dashboard.php" class="logo">
          <img src="file:///C:/Users/tanish%20bajpai/Downloads/db.png" alt="">
        <b><span class="nav-item">DashBoard</span></b>
        </a></li>
        <?php
$a=1;
$b=2;
$c=3;
        ?>
        <li><a <?php echo "href='dashboard2.php?s=$a' "?>class="job">
          <img src="file:///C:/Users/tanish%20bajpai/Downloads/nj.png" alt="">
        <b><span class="nav-item">Jobs</span></b>
        </a></li>
        <li><a <?php echo "href='dashboard2.php?s=$b' "?> class="list">
         <img src="file:///C:/Users/tanish%20bajpai/Downloads/jl.jpg" alt="">              
           <b><span class="nav-item">View CV</span></b>
        </a></li>
        <li><a <?php echo "href='dashboard2.php?s=$c' "?> class="resume">
           <img src="file:///C:/Users/tanish%20bajpai/Downloads/vr.jpg" alt="">  
          <b> <span class="nav-item">View resume</span></b>
        </a></li>
       <li><a href="" class="logout">
       
          <b> <span class="nav-item"><a href="logout.php" style="position:relative;top:323px;left:29%;color:white">Log out</a></span></b>
        </a></li>
      </ul>
    </nav>
    <section class="main">
      <div class="main-top">
        <h1>Online Job Portal</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills" style="position:relative;left:15%;">
        <div class="card">
          <h3>Total User</h3>
          <?php
          include('Connection.php');
          $query= "SELECT * FROM userdetails";
          $run=mysqli_query($con,$query);
          if($total=mysqli_num_rows($run))
              {
                  echo '<span style="font-size: 30pt;position:relative;left:1%;top:10%;">' . $total . '</span>';
              }
              else
              {
                  echo '<span style="font-size: 38pt;position:relative;left:45%;top:30%;">' ."0". '</span>';
              }
          ?>

        </div>
        <div class="card">
          
          <h3>Total Jobs</h3>
          <?php
          $query= "SELECT * FROM jprovider";
          $run=mysqli_query($con,$query);
          if($total=mysqli_num_rows($run))
              {
                  echo '<span style="font-size: 30pt;position:relative;left:1%;top:10%;">' . $total . '</span>';
              }
              else
              {
                  echo '<span style="font-size: 38pt;position:relative;left:45%;top:30%;">' ."0". '</span>';
              }
          ?>
          
        </div>
        <div class="card">
          
          <h3>Applied Jobs</h3>
          <?php
          $query= "SELECT * FROM jseeker";
          $run=mysqli_query($con,$query);
          if($total=mysqli_num_rows($run))
              {
                  echo '<span style="font-size: 30pt;position:relative;left:1%;top:10%;">' . $total . '</span>';
              }
              else
              {
                  echo '<span style="font-size: 38pt;position:relative;left:45%;top:30%;">' ."0". '</span>';
              }
          ?>
          
        </div>
      </div>

       </div>
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