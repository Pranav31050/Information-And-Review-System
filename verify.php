<?php include('partials-front/menu.php'); ?>
<?php
if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=$_GET['code'];
$sql=mysqli_query($conn,"SELECT * FROM registration WHERE vkey='$code'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
  
$st=0;
$result =mysqli_query($conn,"SELECT userid FROM registration WHERE vkey='$code' and verified='$st'");
$result4=mysqli_fetch_array($result);   

if($result4>0) 
  {
$st=1;
$result1=mysqli_query($conn,"UPDATE registration SET verified='$st' WHERE vkey='$code'");
echo "<script>alert('Your account is Activated');</script>";
echo "<script>window.location = 'login.php';</script>";;
}
else
{
  echo "<script>alert('Your account is already active, no need to activate again');</script>";
  echo "<script>window.location = 'login.php';</script>";;

}
}
else
{
  echo "<script>alert('Wrong activation code.');</script>";
  echo "<script>window.location = 'signup.php';</script>";;

}
}

?>