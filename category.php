<?php include 'lead360_Admin/connect/db.php'; ?>
<?php
        $ip = $_SERVER['REMOTE_ADDR'];

        $check = dbconnect()->prepare("SELECT * FROM visits WHERE ip=?");
        $check->execute([$ip]);
        if( $check->rowCount() == 0 ) {
            $created = date('Y-m-d');
            $ins = dbconnect()->prepare("INSERT INTO visits SET ip=?,created=?");
            $ins->execute([$ip,$created]);
        }
    ?>
<!DOCTYPE HTML>
<html lang="en">
    
<head>
<?php
include 'header.php';

if(isset($_GET['id'])){
    $catID = $_GET['id'];
    }



$query = "SELECT * FROM category WHERE id='$catID' ";
$result = mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);

$category = $row['cat_name'];
$img = $row['img'];
?>


   
            <!-- header end  -->
            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <!--section   -->
                    <section class="hero-section">
                        <div class="bg-wrap hero-section_bg">
                            <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $img ?>"></div>
                        </div>
                        
                        
                        <div class="container">
                            
                            <div class="hero-section_title">

                                <h2>  <?php echo $category; ?></h2>
                            </div>
                            <div class="clearfix"></div>
                            <div class="breadcrumbs-list fl-wrap">
                                <a href="index">Home</a> <span>Category</span>
                            </div>
                            <div class="scroll-down-wrap scw_transparent">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover</span>
                            </div>
                        </div>
                    </section>
                    <!-- section end  -->
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="main-container fl-wrap fix-container-init">
                                        <div class="section-title">
                                            <h2>Most Recent Posts</h2>
                                            <h4>Don't miss daily news</h4>
                                            
                                        </div>
                                        <div class="list-post-wrap">
                                            <!--list-post-->

                                                    <?php

                                        $query = "SELECT * FROM post WHERE cat_id ='$catID'";
                                        $result = mysqli_query($connect,$query);
                                        while($row=mysqli_fetch_assoc($result)) {
                                          $id = $row['id'];

                                          //get comment amount
                                        //   $queryCom = "SELECT * FROM comment_table WHERE post_id='$id'";
                                        //   $resultCom = mysqli_query($connect,$query);
                                        //   $countCom = mysqli_num_rows($resultCom);

                                          $comCount=0;
                                          $queryCom = "SELECT id FROM comment_table WHERE post_id='$id'";
                                          $resultCom = mysqli_query($connect, $queryCom);
                                            while($countRow = mysqli_fetch_assoc($resultCom)){
                                            $comCount++;
                                        }


                                          $title = $row['title'];
                                          $category = $row['cat_id'];
                                          $author = $row['author'];
                                          $image = $row['image'];
                                          $description = $row['description'];  
                                          $summary = $row['summary'];
                                          $created = $row['created_on'];
                                          // $desc=  substr(html_entity_decode($description), 30, 400); 



                                        ?>	
                                            <div class="list-post fl-wrap">
                                                <div class="list-post-media">
                                                    <a href="single-post?id=<?php echo $id; ?>"><?php echo $catname; ?>
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $image; ?>"></div>
                                                        </div>
                                                    </a>
                                                    <span class="post-media_title">&copy; Image Credit <?php echo $summary ?></span>
                                                </div>



                                                <div class="list-post-content">



                                                    <a class="post-category-marker" href="single-post?id=<?php echo $id ?>"></a>
                                                    <h3><a href="single-post?id=<?php echo $id?>"><?php echo $title; ?></a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i><?php echo $created; ?></span>
                                                    <p><?php echo $summary; ?></p>
                                                    <ul class="post-opt">
                                                        <li><i class="far fa-comments-alt"></i> <?php echo $comCount; ?> </li>
                                                        <!-- <li><i class="fal fa-eye"></i>  587 </li> -->
                                                    </ul>
                                                    <div class="author-link"><a href="single-post"><span>By <?php echo $author; ?></span></a></div>
                                                </div>
                                            </div>
                                           <?php } ?>                                       
                                            <!--list-post end-->					
                                        </div>
                                        <div class="clearfix"></div>
                                        <!-- <div class="load-more_btn"><i class="fal fa-undo"></i>Load More</div> -->
                                        <!--pagination-->
                                        <!-- <div class="pagination">
                                            <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i></a>
                                            <a href="#">01.</a>
                                            <a href="#" class="current-page">02.</a>
                                            <a href="#">03.</a>
                                            <a href="#">04.</a>
                                            <a href="#" class="nextposts-link"><i class="fas fa-caret-right"></i></a>
                                        </div> -->
                                        <!--pagination end-->					
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- sidebar   -->
                                    <div class="sidebar-content fl-wrap fixed-bar">
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="search-widget fl-wrap">
                                                    <form action="#">
                                                        <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />
                                                        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Categories</div>
                                            <div class="box-widget-content">
                                                <div class="sb-categories_bg">
                                                    <?php
                                                    $nm = 0;
                                                    $new_sql = "SELECT * FROM category";
                                                    $new_result = mysqli_query($connect, $new_sql);
                                                    while ($new_row=mysqli_fetch_assoc($new_result)) {
                                                        $cat_name = $new_row['cat_name'];
                                                        $nm++;
                                                        $id_num = $new_row['id'];
                                                        $cat_img = $new_row['img'];

                                                           $counting=0;
                                                           $next_sql = "SELECT cat_id FROM post WHERE cat_id='$id_num'";
                                                           $next_result = mysqli_query($connect, $next_sql);
                                                           while($next_row=mysqli_fetch_assoc($next_result)){
                                                           $counting++;
                                                        }
                                                        
                                                    
                                                    ?>
                                                    <!-- sb-categories_bg_item -->
                                                    <a href="category?id=<?php echo $id_num; ?>" class="sb-categories_bg_item">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $cat_img; ?>"></div>
                                                            <div class="overlay"></div>
                                                        </div>
                                                        <div class="spb-categories_title"><span><?php echo $nm; ?></span><?php echo $cat_name; ?></div>
                                                        
                                                        <div class="spb-categories_counter"><?php echo $counting; ?></div>
                                                    </a>
                                                    <!-- sb-categories_bg_item  end-->
                                                    <!-- sb-categories_bg_item -->
                                                <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                      					
                                    </div>
                                    <!-- sidebar  end -->
                                </div>
                            </div>
                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!-- section  -->
                    <div class="gray-bg ad-wrap fl-wrap">
                        <div class="content-banner-wrap">
                            <img src="images/all/mainadvert.png" class="respimg" alt="">
                        </div>
                    </div>
                    <!-- section end -->
                </div>
                <!-- content  end-->
                <!-- footer -->
                
                <?php include 'footer.php' ?>

                <!-- footer end-->  			
                <div class="aside-panel">
                    <ul>
                        <li> <a href="category.html"><i class="far  fa-podium"></i><span>Politics</span></a></li>
                        <li> <a href="category.html"><i class="far fa-atom"></i><span>Technology</span></a></li>
                        <li> <a href="category.html"><i class="far fa-user-chart"></i><span>Business</span></a></li>
                        <li> <a href="category.html"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
                        <li> <a href="category.html"><i class="far fa-flask"></i><span>Science</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- wrapper end -->	
            <!--register form -->
            <div class="main-register-container">
                <div class="reg-overlay close-reg-form"></div>
                <div class="main-register-holder">
                    <div class="main-register-wrap fl-wrap">
                        <div class="main-register_bg">
                            <div class="bg-wrap">
                                <div class="bg par-elem "  data-bg="images/bg/1.jpg"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
                        </div>
                        <div class="main-register tabs-act fl-wrap">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                            </ul>
                            <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                            <!--tabs -->
                            <div id="tabs-container">
                                <div class="tab">
                                    <!--tab -->
                                    <div id="tab-1" class="tab-content first-tab">
                                        <div class="custom-form">
                                            <form method="post" name="registerform">
                                                <label>Username or Email Address <span>*</span> </label>
                                                <input name="email" type="text" onClick="this.select()" value="">
                                                <label>Password <span>*</span> </label>
                                                <input name="password" type="password" onClick="this.select()" value="">
                                                <div class="filter-tags">
                                                    <input id="check-a" type="checkbox" name="check" checked>
                                                    <label for="check-a">Remember me</label>
                                                </div>
                                                <div class="lost_password">
                                                    <a href="#">Lost Your Password?</a>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-2" class="tab-content">
                                            <div class="custom-form">
                                                <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                                    <label>Full Name <span>*</span> </label>
                                                    <input name="name" type="text" onClick="this.select()" value="">
                                                    <label>Email Address <span>*</span></label>
                                                    <input name="email" type="text" onClick="this.select()" value="">
                                                    <label>Password <span>*</span></label>
                                                    <input name="password" type="password" onClick="this.select()" value="">
                                                    <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                </div>
                                <!--tabs end -->
                                <div class="log-separator fl-wrap"><span>or</span></div>
                                <div class="soc-log  fl-wrap">
                                    <p>For faster login or register use your social account.</p>
                                    <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
    </body>

<!-- Mirrored from gmag.kwst.net/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 10:47:29 GMT -->
</html>