<?php
session_start();
include('Connection.php');
if($_SESSION["AN"]==true)
{
  ?>
<link rel="stylesheet" href="ht.css"/>
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
       
          <b> <span class="nav-item"><a href="logout.php" style="position:relative;top:323px;left:25%;color:white">Log out</a></span></b>
        </a></li>
      </ul>
    </nav>
</div>
<?php
$Flag=$_GET['s'];
if($Flag=='1')
{
    ?>
    <html>
        <head>
            <title>dashboard</title>
        </head>
        <body>
          <center>
<div class="main-top"style="position:relative;left:11%;top:-630px">
        <h1>JOBS</h1>
        <i class="fas fa-user-cog"></i>
      </div>
          </center>
      <br><br><br><br>
      <center>
      <table border=1 class="tb" style="background-color:#f5f5f5;position:relative;left:11%;top:-680px">
        <thead>
            <tr style="background-color:black;color:white">
                <th>Sno</th>
                <th>File Name</th>
                <th>Visit</th>
            </tr>
        </thead>
        <tbody>
      <?php
      include('Connection.php');
$query= "SELECT * FROM  jprovider";
$run=mysqli_query($con,$query);
if(mysqli_num_rows($run)>0){
while($row=mysqli_fetch_assoc($run))
{
?>
<tr>
    <td><?php echo $row['sno']?></td>
    <center><td><?php echo $row['imageA']?></td></center>
    <center><td style="position:relative;left:10%"><a href="<?php echo $row['imageA']?>" target="_admin"><b style="color:red">Click Here To View</b></a></td></center>
</tr>
  <?php
}
}
 } ?>
        </tbody>
</center>
</body>
<html>
<?php
$Flag=$_GET['s'];
if($Flag=='2')
{
    ?>
    <html>
        <head>
            <title>dashboard</title>
        </head>
        <body>
          <center>
<div class="main-top"style="position:relative;left:11%;top:-630px">
        <h1>CV</h1>
        <i class="fas fa-user-cog"></i>
      </div>
          </center>
      <br><br><br><br>
      <center>
      <table border=1 class="tb" style="background-color:#f5f5f5;position:relative;left:11%;top:-680px">
        <thead>
            <tr style="background-color:black;color:white">
                <th>Sno</th>
                <th>File Name</th>
                <th>Visit</th>
            </tr>
        </thead>
        <tbody>
      <?php
      include('Connection.php');
$query= "SELECT * FROM  jseeker WHERE Ftype='CV'";
$run=mysqli_query($con,$query);
if(mysqli_num_rows($run)>0){
while($row=mysqli_fetch_assoc($run))
{
?>
<tr>
    <td><?php echo $row['sno']?></td>
    <center><td><?php echo $row['imageA']?></td></center>
    <center><td style="position:relative;left:10%"><a href="<?php echo $row['imageA']?>" target="_admin"><b style="color:red">Click Here To View</b></a></td></center>
</tr>
  <?php
}
}
 } ?>
        </tbody>
</center>
</body>
<html>
<?php
$Flag=$_GET['s'];
if($Flag=='3')
{
    ?>
    <html>
        <head>
            <title>dashboard</title>
        </head>
        <body style="overflow-x:hidden">
          <center>
<div class="main-top"style="position:relative;left:11%;top:-630px">
        <h1>RESUME</h1>
        <i class="fas fa-user-cog"></i>
      </div>
          </center>
      <br><br><br><br>
      <center>
      <table border=1 class="tb" style="background-color:#f5f5f5;position:relative;left:11%;top:-680px">
        <thead>
            <tr style="background-color:black;color:white">
                <th>Sno</th>
                <th>File Name</th>
                <th>Visit</th>
            </tr>
        </thead>
        <tbody>
      <?php
      include('Connection.php');
$query= "SELECT * FROM  jseeker WHERE Ftype='Resume'";
$run=mysqli_query($con,$query);
if(mysqli_num_rows($run)>0){
while($row=mysqli_fetch_assoc($run))
{
?>
<tr>
    <td><?php echo $row['sno']?></td>
    <center><td><?php echo $row['imageA']?></td></center>
    <center><td style="position:relative;left:10%"><a href="<?php echo $row['imageA']?>" target="_admin"><b style="color:red">Click Here To View</b></a></td></center>
</tr>
  <?php
}
}
 } ?>
        </tbody>
</center>
</body>
<html>
<?php
}
else
{
  echo "<script>alert('Login First');
  window.location.href='index.php'
  </script>";
}
?>