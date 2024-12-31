    
    <?php include('partials-front/menu.php'); ?>
    <link rel="stylesheet" href="css/style.css">

    <?php 
        //CHeck whether id is passed or not
        if(isset($_GET['category_id']))
        {
            //Category id is set and get the id
            $category_id = $_GET['category_id'];
            // Get the CAtegory Title Based on Category ID
            $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Get the value from Database
            $row = mysqli_fetch_assoc($res);
            //Get the TItle
            $category_title = $row['title'];
        }
        else
        {
            //CAtegory not passed
            //Redirect to Home page
            header('location:'.SITEURL);
        }
    ?>


    <!-- instution sEARCH Section Starts Here -->
    <section class="ins-search text-center">
        <div class="container">
            
            <h2>instution on <a href="#" class="text-white">"<?php echo $category_title; ?>"</a></h2>

        </div>
    </section>
    <!-- instution sEARCH Section Ends Here -->



    <!-- instution MEnu Section Starts Here -->
    <section class="ins-menu">
        <div class="container">
            <h2 class="text-center">instution Menu</h2>

            <?php 
            
                //Create SQL Query to Get instution based on Selected CAtegory
                $sql2 = "SELECT * FROM tbl_ins WHERE category_id=1";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Count the Rows
                $count2 = mysqli_num_rows($res2);

                //CHeck whether instution is available or not
                if($count2>0)
                {
                    //instution is Available
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
                        ?>
                        
                        <div class="ins-menu-box">
                            <div class="ins-menu-img">
                                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="ins" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            
                                <p class="ins-detail">
                                    <?php echo $description; ?>
                                </p>
                                <br>

                               
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //category not available
                    echo "<div class='error'>category not Available.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- category Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>