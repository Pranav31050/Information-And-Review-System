
    <?php include('partials-front/menu.php'); ?>
    <link rel="stylesheet" href="css/style.css">
    <script src="/rating/js/rating.js"></script>
<link rel="stylesheet" href="/rating/css/style.css">
<?php include('rating/inc/container.php');?>
   
    
    <?php
	include 'rating/class/Rating.php';
	$rating = new Rating();
	$itemList = $rating->getItemList();
	foreach($itemList as $item){
		$average = $rating->getRatingAverage($item["id"]);
    }
	?>	


    <!-- instution sEARCH Section Starts Here -->
    <section class="ins-search text-center">
        <div class="container">
            <?php 

                //Get the Search Keyword
                // $search = $_POST['search'];
                $search = mysqli_real_escape_string($conn, $_POST['search']);
            
            ?>


            <h2>Institution on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- instution sEARCH Section Ends Here -->



    <!-- instution MEnu Section Starts Here -->
    <section class="ins-menu">
        <div class="container">
            <h2 class="text-center">Institution Menu</h2>

            <?php 

                //SQL Query to Get instution based on search keyword
                // "SELECT * FROM tbl_ins WHERE title LIKE '%Bir hospital'%' OR description LIKE '%one of the oldest hospital%'";
                $sql = "SELECT * FROM tbl_ins WHERE  active='Yes' and title LIKE '%$search%' OR location LIKE '%$search%' OR description LIKE '%$search%'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether instution available of not
                if($count>0)
                {
                    //instution Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the details
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
                                    // Check whether image name is available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/instution/<?php echo $image_name; ?>" alt="Institution" class="img-responsive img-curve">
                                        <?php 

                                    }
                                ?>
                                
                            </div>

                            <div class="ins-menu-desc">
                                <h4><?php echo $title; ?></h4><br>
                                <p class="ins-phnnumber">Phone Number<b>:</b></><?php echo $phnnumber ; ?></p>
                                <p class="ins-phnnumber">Location<b>:</b><?php echo $location; ?></p>
                                <p class="ins-phnnumber">Website<b>:</b><?php echo $visit; ?></p>
                                <p class="ins-phnnumber">Description<b>:</b><?php echo $description; ?></p>
                               
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
                    echo "<div class='error'>Instituion not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- instution Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>