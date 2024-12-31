<link rel="stylesheet" href="css/style.css">


<?php include('partials-front/menu.php'); ?>

    <!-- instution sEARCH Section Starts Here -->
    <section class="ins-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>ins-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Institutions.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
            

        </div>
    </section>
    

    <!-- instution sEARCH Section Ends Here -->
    

  

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Institutions</h2>

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE id=1 and active='Yes' AND featured='Yes' LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>hospital.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Institutions" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
             
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>
            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE id=2 and active='Yes' AND featured='Yes' LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>school.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Institutions" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
             
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>
<?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE id=3 and active='Yes' AND featured='Yes' LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>college.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Institutions" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
             
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>

            <div class="clearfix"></div>
        </div>
        

          
    

        <p class="text-center">
            <a href="categories.php">See All Institutions</a>
        </p>
    
    </section>
    <!-- Categories Section Ends Here -->
    



    <!-- instution MEnu Section Starts Here -->
    <section class="ins-menu">
        <div class="container">
            <h2 class="text-center">Explore Hospital</h2>

            <?php 
            
            //Getting instution from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_ins WHERE category_id = 1 AND active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether instution available or not
            if($count2>0)
            {
                //instution Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                                $title = $row['title'];
                                $phnnumber = $row['phnnumber'];
                                $location = $row['location'];
                                $description = $row['description'];
                                $visit = $row['visit'];
                                $image_name = $row['image_name'];
                               
                    ?>
                    

                    <div class="ins-menu-box">
                        <div class="ins-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/instution/<?php echo $image_name; ?>" alt="Hospital" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                            
                        </div>

                        <div class="ins-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="ins-phnnumber">Phone Number:<?php echo $phnnumber; ?></p>
                            <p class="ins-phnnumber">Location:<?php echo $location; ?></p>
                            <p class="ins-phnnumber">Website:<?php echo $visit; ?>
                            <p class="ins-phnnumber">Description:<?php echo $description; ?>
                            
                            <div><span class="rating-reviews"><a href="./rating/show_rating.php?item_id=<?php echo $id; ?>">Rating & Reviews</a></span></div>
                                               
                           
                            </p>
                            <br>

                           
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //instution Not Available 
                echo "<div class='error'>Hospital not available.</div>";
            }
            
            ?>
           
            

 

            <div class="clearfix"></div>

          
    

        <p class="text-center">
            <a href="hospital.php">See All Hospitals</a>
        </p>
    </section>
    <section class="ins-menu">
        <div class="container">
            <h2 class="text-center">Explore School</h2>

            <?php 
            
            //Getting instituion from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_ins WHERE category_id = 2 AND active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether instituion available or not
            if($count2>0)
            {
                //instituion Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                                $title = $row['title'];
                                $phnnumber = $row['phnnumber'];
                                $location = $row['location'];
                                $description = $row['description'];
                                $visit = $row['visit'];
                                $image_name = $row['image_name'];
                               
                    ?>
                    

                    <div class="ins-menu-box">
                        <div class="ins-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/instution/<?php echo $image_name; ?>" alt="School" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                            
                        </div>

                        <div class="ins-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="ins-phnnumber">Phone Number:<?php echo $phnnumber; ?></p>

                            <p class="ins-phnnumber">Location:<?php echo $location; ?></p>
                            <p class="ins-phnnumber">Website:<?php echo $visit; ?>
                            <p class="ins-phnnumber">Description:<?php echo $description; ?>
                            <div><span class="rating-reviews"><a href="./rating/show_rating.php?item_id=<?php echo $id; ?>">Rating & Reviews</a></span></div>
                            </p>
                            <br>

                            
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //instituion Not Available 
                echo "<div class='error'>School not available.</div>";
            }
            
            ?>
           
            

 

            <div class="clearfix"></div>

          
    

        <p class="text-center">
            <a href="school.php">See All School</a>
        </p>
    </section>
    <section class="ins-menu">
        <div class="container">
            <h2 class="text-center">Explore College</h2>

            <?php 
            
            //Getting instituion from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_ins WHERE category_id = 3 AND active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether instituion available or not
            if($count2>0)
            {
                //instituion Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                                $title = $row['title'];
                                $phnnumber = $row['phnnumber'];
                                $location = $row['location'];
                                $description = $row['description'];
                                $visit = $row['visit'];
                                $image_name = $row['image_name'];
                               
                    ?>
                    

                    <div class="ins-menu-box">
                        <div class="ins-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/instution/<?php echo $image_name; ?>" alt="College" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                            
                        </div>

                        <div class="ins-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="ins-phnnumber">Phone Number:<?php echo $phnnumber; ?></p>
                            <p class="ins-phnnumber">Location:<?php echo $location; ?></p>
                            <p class="ins-phnnumber">Website:<?php echo $visit; ?>
                            <p class="ins-phnnumber">Description:
                                <?php echo $description; ?>
                                <div><span class="rating-reviews"><a href="./rating/show_rating.php?item_id=<?php echo $id; ?>">Rating & Reviews</a></span></div>
                            </p>
                            <br>

                           
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //instituion Not Available 
                echo "<div class='error'>College not available.</div>";
            }
            
            ?>
           
            

 

            <div class="clearfix"></div>

          
    

        <p class="text-center">
            <a href="college.php">See All Colleges</a>
        </p>
    </section>
    
    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- instituion Menu Section Ends Here -->

    
    <?php include('partials-front/footer.php'); ?>