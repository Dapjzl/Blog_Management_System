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
<?php include 'header.php'; ?>

            <!-- header end  -->
            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <!-- hero-slider-wrap     -->
                    <div class="hero-slider-wrap fl-wrap">
                        <!-- hero-slider-container     -->
                        <div class="hero-slider-container multi-slider fl-wrap full-height">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                                         <?php
                                                         $query14 = "SELECT * FROM post order by rand(id) DESC LIMIT 10";
                                                        $result14 = mysqli_query($connect,$query14);
                                                        while($rowld=mysqli_fetch_assoc($result14)) {
                                                            $idld = $rowld['id'];
                                                            $catId = $rowld['cat_id'];
                                                            $picture = $rowld['image'];
                                                            $header = $rowld['title'];
                                                            $summary = $rowld['summary'];
                                                            $datetime = $rowld['created_on'];
                                                            $created_by = $rowld['author'];
                                                         
                                                          // $desc=  substr(html_entity_decode($description), 30, 400); 
                                                            $sql14 = "SELECT * FROM category WHERE id='$catId'";
                                                            $res = mysqli_query($connect, $sql14);
                                                            $rowtate = mysqli_fetch_assoc($res);
                                                            $cat_name = $rowtate['cat_name'];
                                                        ?>  
                                    <!-- swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="bg-wrap">
                                        <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $picture; ?>"></div>
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="hero-item fl-wrap">
                                            <div class="container">
                                                <a class="post-category-marker" href="category?id=<?php echo $catId ?>"><?php echo $cat_name; ?> </a>
                                                <div class="clearfix"></div>
                                                <h2><a href="single-post?id=<?php echo $idld ?>"><?php echo $header; ?></a></h2>
                                                <h4><span>Image Credit: <?php echo $summary; ?></span></h4>
                                                <div class="clearfix"></div>
                                                <div class="author-link"><a href="single-post?id=<?php echo $id ?>"> <span>By <?php echo $created_by; ?></span></a></div>
                                                <span class="post-date"><i class="far fa-clock"></i> <?php echo $created; ?></span>
                                            </div>
                                        </div>
                                    </div>	
                                    <?php } ?>


                                </div>

                            </div>
                            <div class="fs-slider_btn color-bg fs-slider-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="fs-slider_btn color-bg fs-slider-button-next"><i class="fas fa-caret-right"></i></div>
                        </div>
                        <!-- hero-slider-container  end   -->
                        <!-- hero-slider_controls-wrap   -->
                        <div class="hero-slider_controls-wrap">
                            <div class="container">
                                <div class="hero-slider_controls-list multi-slider_control">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!-- swiper-slide  -->
                                            
                                                        <?php

                                                    $query1 = "SELECT * FROM post order by rand(id) DESC LIMIT 10";
                                                    $result1 = mysqli_query($connect,$query1);
                                                    while($rowle=mysqli_fetch_assoc($result1)) {
                                                      $idle = $rowle['id'];
                                                      $titlele = $rowle['title'];
                                                    //   $categoryle = $rowle['category'];
                                                      $authorle = $rowle['author'];
                                                      $imagele = $rowle['image'];
                                                      $createdle = $rowle['created_on'];
                                                      // $desc=  substr(html_entity_decode($description), 30, 400); 



                                                    ?>  
                                                    <div class="swiper-slide">
                                                        <div class="hsc-list_item fl-wrap">
                                                            <div class="hsc-list_item-media">
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $imagele; ?>"></div>
                                                                </div>
                                                            </div>                                                 
                                                            <div class="hsc-list_item-content fl-wrap">
                                                                <h4 href="single-post?id=<?php echo $idle;?>"><?php echo $titlele; ?></h4>
                                                                <span class="post-date"><i class="far fa-clock"></i> <?php echo $createdle; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>


                                            <?php } ?>					
                                        </div>
                                    </div>
                                </div>
                                <div class="multi-pag"></div>
                            </div>
                        </div>
                        <!-- hero-slider_controls-wrap end  -->
                        <div class="slider-progress-bar act-slider">
                            <span>
                                <svg class="circ" width="30" height="30">
                                    <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none" />
                                    <circle class="circ1" cx="15" cy="15" r="13" stroke="#e93314" stroke-width="2" fill="none" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- hero-slider-wrap  end   -->
                    <!-- section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="main-container fl-wrap fix-container-init">
                                        <!-- <div class="section-title">
                                            <h2>Latest Posts</h2>
                                            <h4>Don't miss latest posts, subscribe</h4>
                                            <div class="ajax-nav">
                                                
                                            </div>
                                        </div> -->
                                        <!-- <div class="ajax-wrapper fl-wrap">
                                            <div class="ajax-loader"><img src="images/load.jpg" alt=""/></div>
                                            <div id="ajax-content" class="fl-wrap">
                                            </div>
                                        </div> -->
                                        <div class="content-banner-wrap cbw_mar">
                                            <img src="images/all/mainadvert.png" class="respimg" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="section-title sect_dec">
                                            <h2>Top Posts</h2>
                                            <h4>Don't miss new posts</h4>
                                        </div>
                                        <div class="grid-post-wrap">
                                           
                                            <!--grid-post-item end-->								
                                            <div class="more-post-wrap  fl-wrap">
                                                <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                                    <div class="row">
                                                        <?php

                                                        $query12 = "SELECT * FROM post order by rand() LIMIT 10";
                                                        $result12 = mysqli_query($connect,$query12);
                                                        while($rowld=mysqli_fetch_assoc($result12)) {
                                                            $idld = $rowld['id'];
                                                            $catId = $rowld['cat_id'];
                                                            $picture = $rowld['image'];
                                                            $header = $rowld['title'];
                                                            $summary = $rowld['summary'];
                                                            $datetime = $rowld['created_on'];
                                                            $created_by = $rowld['author'];
                                                        
                                                          // $desc=  substr(html_entity_decode($description), 30, 400); 
                                                            $sql12 = "SELECT * FROM category WHERE id='$catId'";
                                                            $res = mysqli_query($connect, $sql12);
                                                            $rowtate = mysqli_fetch_assoc($res);
                                                            $cat_name = $rowtate['cat_name'];
                                                            
    
    
                                                        ?>  

                                                        <div class="col-md-6">
                                                            <!--list-post-->	
                                                            <div class="list-post fl-wrap">
                                                                <a class="post-category-marker" href="category"><?php echo $cat_name; ?></a>
                                                                <div class="list-post-media">
                                                                <a href="single-post?id=<?php echo $idld; ?>">
                                                                    <div class="bg-wrap">
                                                                    <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $picture?>"></div>
                                                                    </div>
                                                                </a>
                                                                <span class="post-media_title">&copy; Image Credit <?php echo $summary ?></span>
                                                                </div>
                                                                <div class="list-post-content">
                                                                    <h3><a href="single-post?id=<?php echo $idld; ?>"><?php echo $header; ?>.</a></h3>
                                                                    <div style="display: flex; flex-direction: row;">
                                                                        <span class="post-date"><i class="far fa-clock"></i><?php echo $datetime; ?></span>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <!--list-post end-->						  
                                                        </div>
                                                        <?php } ?>
                                                    </div> <!--row end-->

                                                        
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <a href="post" class="dark-btn fl-wrap"> Read all Posts </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- sidebar   -->
                                    <div class="sidebar-content fl-wrap fix-bar">
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <!-- content-tabs-wrap -->
                                                <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                                    <div class="content-tabs fl-wrap">
                                                        <ul class="tabs-menu fl-wrap no-list-style">
                                                            <li><a href="#tab-resent">Recent Posts.</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--tabs -->                       
                                                    <div class="tabs-container">
                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-popular" class="tab-content first-tab">
                                                                <div class="post-widget-container fl-wrap">
                                                                    <!-- post-widget-item -->
                                                                    <?php

                                                        $query12 = "SELECT * FROM post order by id DESC limit 4";
                                                        $result12 = mysqli_query($connect,$query12);
                                                        while($rowld=mysqli_fetch_assoc($result12)) {
                                                            $idid = $rowld['id'];
                                                            $catId = $rowld['cat_id'];
                                                            $picture = $rowld['image'];
                                                            $header = $rowld['title'];
                                                            $datetime = $rowld['created_on'];
                                                            $description = $rowld['description'];

                                                        
                                                          // $desc=  substr(html_entity_decode($description), 30, 400); 
                                                          $sql12 = "SELECT * FROM category WHERE id='$catId'";
                                                          $res = mysqli_query($connect, $sql12);
                                                          $rowtate = mysqli_fetch_assoc($res);
                                                          $cat_name = $rowtate['cat_name'];
    
    
                                                        ?> 
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a href="single-post?id=<?php echo $idid; ?>"><img src="lead360_Admin/uploads/<?php echo $picture; ?>"  alt=""></a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a href="single-post?id=<?php echo $idid ?>"><?php echo $header; ?></a></h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i> <?php echo $datetime; ?></span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>										
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tab  end-->
                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-resent" class="tab-content">
                                                                <div class="post-widget-container fl-wrap">
                                                                    <!-- post-widget-item -->
                                                                   
                                                                    <!-- post-widget-item end -->														
                                                                    <!-- post-widget-item -->
                                                                   
                                                                    <!-- post-widget-item end -->														
                                                                    <!-- post-widget-item -->
                                                                    
                                                                    <!-- post-widget-item end -->													
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tab end-->							
                                                    </div>
                                                    <!--tabs end-->  
                                                </div>
                                                <!-- content-tabs-wrap end -->
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div id="weather-widget" class="ideaboxWeather" data-city="Nigeria"></div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Follow Us</div>
                                            <div class="box-widget-content">
                                                <div class="social-widget">
                                                    <a href="#" target="_blank" class="facebook-soc">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span class="soc-widget-title">Like</span>
                                                    <!-- <span class="soc-widget_counter">2640</span> -->
                                                    </a>
                                                    <a href="#" target="_blank" class="twitter-soc">
                                                    <i class="fab fa-twitter"></i>
                                                    <span class="soc-widget-title">Follow</span>
                                                    <!-- <span class="soc-widget_counter">1456</span>												 -->
                                                    </a> 
                                                    <a href="#" target="_blank" class="youtube-soc">
                                                    <i class="fab fa-youtube"></i>
                                                    <span class="soc-widget-title">Subscribe</span>
                                                    <!-- <span class="soc-widget_counter">1456</span>												 -->
                                                    </a> 												
                                                    <a href="#" target="_blank" class="instagram-soc">
                                                    <i class="fab fa-instagram"></i>
                                                    <span class="soc-widget-title">Follow</span>
                                                    <!-- <span class="soc-widget_counter">1456</span>												 -->
                                                    </a> 														
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Popular Tags</div>
                                            <div class="box-widget-content">
                                                <div class="tags-widget">
                                                    <?php
                                                    
                                                    $catQuery = dbconnect()->prepare("SELECT * FROM category LIMIT 5");
                                                    $catQuery->execute();
                                                    while( $rowCat = $catQuery->fetch() ){

                                                    
                                                    ?>
                                                    <a href="category?id=<?php echo $rowCat['id'] ?>"><?php echo $rowCat['cat_name'] ?></a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            
                                        </div>
                                        <!-- box-widget  end -->							
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="single-grid-slider slider_widget">
                                                    <div class="slider_widget_title"></div>
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">
                                                            <!-- swiper-slide-->  
                                                            <!-- <div class="swiper-slide">
                                                                <div class="grid-post-item     fl-wrap">
                                                                    <div class="grid-post-media gpm_sing">
                                                                        <div class="bg-wrap">
                                                                            <div class="bg" data-bg="images/all/21.jpg"></div>
                                                                            <div class="overlay"></div>
                                                                        </div>
                                                                        <div class="grid-post-media_title">
                                                                            <a class="post-category-marker" href="category.html">Technology</a>
                                                                            <h4><a href="post-single.html">Tesla it tested hypersonic Model-C</a></h4>
                                                                            <span class="video-date"><i class="far fa-clock"></i>16 january 2022</span>
                                                                            <ul class="post-opt">
                                                                                <li><i class="far fa-comments-alt"></i> 11 </li>
                                                                                <li><i class="fal fa-eye"></i>  55 </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- swiper-slide end-->
                                                            <!-- swiper-slide-->  
                                                            <div class="swiper-slide">
                                                                <div class="grid-post-item  bold_gpi  fl-wrap">
                                                                    <div class="grid-post-media gpm_sing">
                                                                        <div class="bg-wrap" id="mydiv">
                                                                            <?php
                                                                                $select = dbConnect()->prepare("SELECT * FROM advert ORDER BY rand() LIMIT 1");
                                                                                $select->execute();
                                                                                while ($fetRow=$select->fetch()) {
                                                                                    $advImage = $fetRow['image'];
                                                                                    ?>
                                                                                    <div class="bg" data-bg="images/all/<?php echo $advImage ?>"></div>
                                                                                <?php } ?>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- swiper-slide end-->																	
                                                        </div>
                                                        <div class="sgs-pagination sgs_hor "></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->					
                                    </div>
                                    <!-- sidebar  end -->
                                </div>
                            </div>
                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!-- section   -->
                    <section class="no-padding">
                       
                    </section>
                   
                    <!-- section end -->
                    <!-- section  -->
                    <section>
                        <div class="container">
                            <div class="section-title sect_dec">
                                <h2>Don't miss new posts</h2>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="list-post-wrap list-post-wrap_column list-post-wrap_column_fw">
                                        <!--list-post-->	
                                        <div class="list-post fl-wrap">

                                             <?php

                                                        $query12 = "SELECT * FROM post order by rand() limit 1";
                                                        $result12 = mysqli_query($connect,$query12);
                                                        while($rowld=mysqli_fetch_assoc($result12)) {
                                                            $idld = $rowld['id'];
                                                            $catId = $rowld['cat_id'];
                                                            $picture = $rowld['image'];
                                                            $header = $rowld['title'];
                                                            $aut = $rowld['author'];
                                                            $datetime = $rowld['created_on'];
                                                            $description = $rowld['description'];

                                                        
                                                          // $desc=  substr(html_entity_decode($description), 30, 400); 
                                                          $sql12 = "SELECT * FROM category WHERE id='$catId'";
                                                          $res = mysqli_query($connect, $sql12);
                                                          $rowtate = mysqli_fetch_assoc($res);
                                                          $cat_name = $rowtate['cat_name'];
    
    
                                                        ?> 


                                            <a class="post-category-marker" href="single-post?id=<?php echo $idld ?>"><?php echo $cat_name; ?></a>
                                            <div class="list-post-media">
                                                <a href="single-post?id=<?php echo $idld ?>">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $picture; ?>"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-post-content">
                                                <h3><a href="single-post"><?php echo $header; ?> </a></h3>
                                                <span class="post-date"><i class="far fa-clock"></i> <?php echo $datetime; ?></span>
                                                <!-- <p><?php //echo html_entity_decode($description); ?></p> -->
                                                <div class="author-link"><a href="single-post?id=<?php echo $idld ?>">  <span>By <?php echo $aut; ?></span></a></div>
                                            </div>
                                        <?php } ?>


                                        </div>
                                        <!--list-post end-->				
                                    </div>
                                    <a href="post" class="dark-btn fl-wrap"> Read all Post </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="picker-wrap-container fl-wrap">
                                        <div class="picker-wrap-controls">
                                            <ul class="fl-wrap">
                                                <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                                <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                                <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                            </ul>
                                        </div>
                                        <div class="picker-wrap fl-wrap">
                                            <div class="list-post-wrap  fl-wrap">
                                                 <?php

                                                        $query12 = "SELECT * FROM post ORDER BY rand() LIMIT 7";
                                                        $result12 = mysqli_query($connect,$query12);
                                                        while($rowld=mysqli_fetch_assoc($result12)) {
                                                            $idld = $rowld['id'];
                                                            $catId = $rowld['cat_id'];
                                                            $picture = $rowld['image'];
                                                            $header = $rowld['title'];
                                                            $auth = $rowld['author'];
                                                            $datetime = $rowld['created_on'];
                                                            $description = $rowld['description'];

                                                        
                                                          // $desc=  substr(html_entity_decode($description), 30, 400); 
                                                            $sql12 = "SELECT * FROM category WHERE id='$catId'";
                                                            $res = mysqli_query($connect, $sql12);
                                                            $rowtate = mysqli_fetch_assoc($res);
                                                            $cat_name = $rowtate['cat_name'];   
                                                        ?>  
                                                <!--list-post-->	
                                                <div class="list-post fl-wrap">
                                                    
                                                    <div class="list-post-content">
                                                        <a class="post-category-marker" href="category?id=<?php echo $idid; ?>"><?php echo $cat_name; ?></a>
                                                        <h3><a href="single-post?id=<?php echo $idid; ?>"></a></h3>
                                                        <span class="post-date"><i class="far fa-clock"></i> <?php echo $datetime; ?></span>
                                                        <h3 style="font-size: 14px;">
                                                            <?php
                                                                // if (strlen($header)>35) {
                                                                //     $subbed = substr($header,0,32);
                                                                //     echo "$subbed...";
                                                                // }else {
                                                                    echo $header;
                                                                // }
                                                            ?>
                                                        </h3>
                                                        <p>Read Posts Details Here...</p>
                                                        <div class="author-link"><a href="single-post?id=<?php echo $idid ?>"> <span>by <?php echo $auth; ?></span></a></div>
                                                    </div>
                                                    <div class="list-post-media" style="margin-top: 12px;">
                                                        <a href="single-post?id=<?php echo $idid; ?>">
                                                            <div class="bg-wrap">
                                                            <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $picture; ?>"></div>
                                                            </div>
                                                        </a>                                             
                                                    </div>
                                                    
                                                </div>
                                                <!--list-post end-->
                                                <!--list-post-->	
                                                <!--list-post end-->
                                                 <?php } ?>
                                            </div>
                                        </div>
                                        <div class="controls-limit fl-wrap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="limit-box"></div>
                    </section>
                    <!-- section end -->
                    <!-- section -->
                    <section class="dark-bg no-bottom-padding">
                        <div class="container">
                            <div class="main-video-wrap fl-wrap">
                               
                            </div>
                        </div>
                        <div class="video_carousel-wrap fl-wrap">
                            <div class="container">
                                <div class="video_carousel-container">
                                    <div class="video_carousel_title">
                                        <h4>Popular Posts</h4>
                                        <div class="vc-pagination pag-style"></div>
                                    </div>
                                    <!-- fw-carousel  -->
                                    <div class="video_carousel  lightgallery">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">

                                                         <?php

                                                            $query12 = "SELECT * FROM post ORDER BY rand()";
                                                            $result12 = mysqli_query($connect,$query12);
                                                            while($rowld=mysqli_fetch_assoc($result12)) {
                                                                $idld = $rowld['id'];
                                                                $catId = $rowld['cat_id'];
                                                                $picture = $rowld['image'];
                                                                $header = $rowld['title'];
                                                                $datetime = $rowld['created_on'];
                                                            
                                                            // $desc=  substr(html_entity_decode($description), 30, 400); 
                                                            $sql12 = "SELECT * FROM category WHERE id='$catId'";
                                                            $res = mysqli_query($connect, $sql12);
                                                            $rowtate = mysqli_fetch_assoc($res);
                                                            $cat_name = $rowtate['cat_name'];
    
    
                                                        ?> 


                                                <!-- swiper-slide-->  
                                                <div class="swiper-slide">
                                                    <!-- video-item  -->
                                                    <div class="video-item fl-wrap">
                                                        <div class="video-item-img fl-wrap">
                                                            <img src="lead360_Admin/uploads/<?php echo $picture; ?>" class="respimg" style= "width: 400px; height: 250px; " alt="" >
                                                            
                                                        </div>
                                                        <div class="video-item-title">
                                                            <h4><a href="single-post?id=<?php echo $idld; ?>"><?php echo $header; ?></a></h4>
                                                            <span class="video-date"><i class="far fa-clock"></i> <?php echo $datetime; ?></span>
                                                        </div>
                                                        <a class="post-category-marker" href="category"><?php echo $cat_name; ?></a>
                                                    </div>
                                                    
                                                </div>
                                              
                                                 <?php } ?> 									
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fw-carousel end -->								
                                    <div class="cc-prev cc_btn"><i class="fas fa-caret-left"></i></div>
                                    <div class="cc-next cc_btn"><i class="fas fa-caret-right"></i></div>
                                </div>
                            </div>
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

<script>
    $(document).ready(function(){
        setTimeout(function(){
            $("#mydiv").load(location.href + " #mydiv");
        }, 2500);
    });
    $("#mydiv").on("click", function(){
        $("#mydiv").load(location.href + " #mydiv>*", "");
    })
</script>
<?php include 'footer.php' ?>
                