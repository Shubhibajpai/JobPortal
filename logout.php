<?php
session_start();
include('Connection.php');
if($_SESSION["USE"]==true)
{
session_destroy();
echo "<script>alert('Logout Successfully');
window.location.href='index.php'
</script>";
}
else if($_SESSION["AN"]==true)
{
    session_destroy();
    echo "<script>alert('Logout Successfully');
    window.location.href='Admin.php'
    </script>";
}
else
{
  echo "<script>alert('Login First');
  window.location.href='index.php'
  </script>";
}
?>