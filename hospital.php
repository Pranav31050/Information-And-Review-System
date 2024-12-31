
    <?php include('partials-front/menu.php'); ?>
    <link rel="stylesheet" href="css/style.css">
    
<script src="/rating/js/rating.js"></script>
<link rel="stylesheet" href="/rating/css/style.css">

   
    
    <?php
	include 'rating/class/Rating.php';
	$rating = new Rating();
	$itemList = $rating->getItemList();
	foreach($itemList as $item){
		$average = $rating->getRatingAverage($item["id"]);
    }
	?>	

    <!-- instituion sEARCH Section Starts Here -->
    <section class="ins-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>ins-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Institutions.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- instituion sEARCH Section Ends Here -->



    <!-- instituion MEnu Section Starts Here -->
    <section class="ins-menu">
        <div class="container">
            <h2 class="text-center">View Hospital</h2>

            <?php 
                //Display instituion that are Active
                $sql = "SELECT * FROM tbl_ins WHERE category_id =1 and active='Yes'";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether the instituion are availalable or not
                if($count>0)
                {
                    //instituion Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
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
                                    //CHeck whether image available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/instution/<?php echo $image_name; ?>" alt="hospital" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            <div class="ins-menu-desc">
                                <h4><?php echo $title; ?></h4>
                                <p class="ins-phnnumber">Phone Number:<?php echo $phnnumber; ?></p>
                                <p class="ins-phnnumber">Location:<?php echo $location; ?></p>
                                <p class="ins-phnnumber">Website:<?php echo $visit; ?></p>
                                <p class="ins-phnnumber">Description:<?php echo $description; ?></p>
                               
                               
                          

                            
                                <div> <span class="rating-reviews"><a href="./rating/show_rating.php?item_id=<?php echo $id; ?>">Rating & Reviews</a></span></div>
                               
                              
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //instituion not Available
                    echo "<div class='error'>Hospital not found.</div>";
                }
            ?>

            

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- instituion Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>