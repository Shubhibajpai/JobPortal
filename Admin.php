<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="Admin.css">
    <link rel="stylesheet"href="Admin.js"
</head>
<body>
  <header>
    <h1><font size ="+99">Admin</font></h1>
  </header>
  <nav>
    <ul>
      <li><b><a onclick="window.location.href='index.php';">Home</b></a></li>
    </ul>
    <center> <div class="container">
     <form method="post">
        <center><input type="text" name="AN" placeholder="Admin Email" class="an"></center><br>
        <center><input type="text" name="AP" placeholder="Password" class="pw"></center><br>
        <center><input type="submit" value="Login" class="l" name="button"></center>
        <?php
include('Connection.php');
if(isset($_POST['button']))
{
   $Em=$_POST['AN'];
   $pw=$_POST['AP'];
  if($Em=="Admin123@gmail.com" AND $pw=="admin@123")
  {
   session_start();
    $_SESSION["AN"]=$Em;
    echo "<script>alert('Login Successfully');
window.location.href='dashboard.php'
</script>";
  }
    else
    {
       echo "Invalid Password or Email";
    }
}

?>
        </form>
     </div>
</center><br><br> 
</body>
</html>