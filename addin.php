<?php include('config/constants.php'); ?>

<?php
   
  $title = $_POST['title'];
  $phnnumber = $_POST['phnnumber'];
  $location = $_POST['location'];
  $description = $_POST['description'];
  $visit = $_POST['visit'];
  $category_id = $_POST['category_id'];
  if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No"; //Setting Default Value
                }


	// Database connection
  $sql2 = "INSERT INTO tbl_ins SET 
  title = '$title',
  phnnumber = $phnnumber ,
  location = '$location',
  description = '$description',
  visit = '$visit',
  category_id = $category_id ,
  active = '$active'
";
$res2 = mysqli_query($conn, $sql2);
if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'>Instutions Added Successfully.</div>";
                    echo "<script>alert('Instutions Added Successfully.');</script>";
                    echo "<script>window.location = 'index.php';</script>";;
                }
                else
                {
                    //FAiled to Insert Data
                    $_SESSION['add'] = "<div class='error'>Failed to Add Instutions.</div>";
                    echo "<script>alert('Failed to Add Instutions.');</script>";
                    echo "<script>window.location = 'addinfo.php';</script>";;
                }
?>