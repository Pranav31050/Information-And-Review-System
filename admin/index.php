
<?php include('partials/menu.php'); ?>
<link rel="stylesheet" href="../css/admin.css">

        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Dashboard</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>

                <div class="col-4 text-center">

                    <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM tbl_category";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1>
                    <br />
                    Categories
                </div>

                <div class="col-4 text-center">

                    <?php 
                        //Sql Query 
                        $sql2 = "SELECT * FROM tbl_ins";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        $count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1>
                    <br />
                    Instution
                </div>
                <div class="col-4 text-center">
<?php 
    //Sql Query 
    $sql2 = "SELECT * FROM tbl_ins where category_id=1";
    //Execute Query
    $res2 = mysqli_query($conn, $sql2);
    //Count Rows
    $count2 = mysqli_num_rows($res2);
?>

<h1><?php echo $count2; ?></h1>
<br />
Hospital
</div>
                <div class="col-4 text-center">

               <?php 
    //Sql Query 
              $sql2 = "SELECT * FROM tbl_ins where category_id=2";
    //Execute Query
                $res2 = mysqli_query($conn, $sql2);
    //Count Rows
    $count2 = mysqli_num_rows($res2);
?>

<h1><?php echo $count2; ?></h1>
<br />
School
</div>

<div class="col-4 text-center">
<?php 
    //Sql Query 
    $sql2 = "SELECT * FROM tbl_ins where category_id=3";
    //Execute Query
    $res2 = mysqli_query($conn, $sql2);
    //Count Rows
    $count2 = mysqli_num_rows($res2);
?>

<h1><?php echo $count2; ?></h1>
<br />
Collage
</div>

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

<?php include('partials/footer.php') ?>