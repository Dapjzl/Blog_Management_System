<?php include 'header.php'; ?>

            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <div class="breadcrumbs-header fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs-header_url">
                                <a href="#">Home</a><span>Lead360tv</span>
                            </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover</span>
                            </div>
                        </div>
                        <div class="pwh_bg"></div>
                    </div>
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="main-container fl-wrap fix-container-init">
                                        <div class="section-title">
                                            <h2>Most Recent World News</h2>
                                            <h4>Don't miss daily news</h4>
                                            
                                        </div>
                                        <div class="list-post-wrap">
                                                   <?php

                                                        $query12 = "SELECT * FROM post order by rand() LIMIT 5";
                                                        $result12 = mysqli_query($connect,$query12);
                                                        while($rowld=mysqli_fetch_assoc($result12)) {
                                                            $idld = $rowld['id'];
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
                                            <!--list-post-->	
                                            <div class="list-post fl-wrap">
                                                <div class="list-post-media">
                                                    <a href="single-post.php?id=<?php echo $idid ?>">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="../lead360dashboard/uploads/<?php echo $picture; ?>"></div>
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                <div class="list-post-content">
                                                    <a class="post-category-marker" href="category.php?id=<?php echo $idid ?>"><?php echo $cat_name; ?></a>
                                                    <h3><a href="single-post.php?id=<?php echo $idid ?>"><?php echo $header; ?></a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i> <?php echo $datetime; ?></span>
                                                    <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                                    
                                                    <div class="author-link"><a href=""><span>By <?php echo $author; ?></span></a></div>
                                                </div>
                                            </div>
                                            <!--list-post end-->
                                            <!--list-post-->	
                                            <?php } ?>                                           
                                            					
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="load-more_btn"><i class="fal fa-undo"><a href="post.php"></i>Load More</a></div>
                                        <!--pagination-->
                                        
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
                                       
                                        <!-- box-widget  end -->					
                                        <!-- box-widget -->
                                        
                                        <!-- box-widget  end -->
                                        <!-- box-widget -->
                                        
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Follow Us</div>
                                            <div class="box-widget-content">
                                                <div class="social-widget">
                                                    <a href="#" target="_blank" class="facebook-soc">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span class="soc-widget-title">Likes</span>
                                                    <span class="soc-widget_counter">2640</span>
                                                    </a>
                                                    <a href="#" target="_blank" class="twitter-soc">
                                                    <i class="fab fa-twitter"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>												
                                                    </a> 
                                                    <a href="#" target="_blank" class="youtube-soc">
                                                    <i class="fab fa-youtube"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>												
                                                    </a> 												
                                                    <a href="#" target="_blank" class="instagram-soc">
                                                    <i class="fab fa-instagram"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>												
                                                    </a> 														
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                     <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <!-- content-tabs-wrap -->
                                                <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                                    <div class="content-tabs fl-wrap">
                                                        <ul class="tabs-menu fl-wrap no-list-style">
                                                            <li><a href="#tab-resent">Recent News</a></li>
                                                            <li><a href="#tab-resent"></a></li>
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

                                                        $query12 = "SELECT * FROM post order by rand() limit 4";
                                                        $result12 = mysqli_query($connect,$query12);
                                                        while($rowld=mysqli_fetch_assoc($result12)) {
                                                            $idld = $rowld['id'];
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
                                                                            <a href="single-post.php?id=<?php echo $idid; ?>"><img src="../lead360dashboard/uploads/<?php echo $picture; ?>"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="single-post.php?id=<?php echo $idid ?>"><?php echo $header; ?></a></h4>
                                                                            <h5>&copy; Image Copyrights <?php echo $summary ?></h5>
                                                                            <!-- <span class="post-media_title">&copy; Image Copyrights <?php echo $summary ?></span> -->
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
                            <img src="images/all/banner2.jpg" class="respimg" alt="">
                        </div>
                    </div>
                    <!-- section end -->
                </div>
                <!-- content  end-->
               <?php include 'footer.php'; ?>
