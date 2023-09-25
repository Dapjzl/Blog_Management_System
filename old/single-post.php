<?php
include 'header.php';

if(isset($_GET['id'])){
    $catID = $_GET['id'];
    }

?>


<?php
$ip = $_SERVER['REMOTE_ADDR'];

$check = dbconnect()->prepare("SELECT * FROM views WHERE ip=? AND post_id=?");
$check->execute([$ip,$catID]);
if( $check->rowCount() == 0 ) {
    $created = date('Y-m-d');
    $ins = dbconnect()->prepare("INSERT INTO views SET ip=?,created=?,post_id=?");
    $ins->execute([$ip,$created,$catID]);
}


?>

<?php



$query = "SELECT * FROM post WHERE id='$catID'";
$result = mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);


$id = $row['id'];
$title = $row['title'];
$category_id = $row['cat_id'];

$queroot = dbConnect()->prepare("SELECT * FROM category WHERE id=?");
$queroot->execute([$category_id]);
$fetch = $queroot->fetch();
$category = $fetch['cat_name'];
// $author = $row['author'];
// $image = $row['image'];
// $description = $row['description'];  
// $summary = $row['summary'];
// $created = $row['created_on'];
?>


<?php
$error = "";
    if(isset($_POST['submit'])) {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $time = date('d F Y H-i-s A');
        if (empty($name)){
            $error = "<p style='color:red; font-size:20px;'>* Your name is required. *</p>";
        }elseif(empty($comment)){
            $error = "<p style='color:red; font-size:20px;'>* Comment is rquired. *</p>";
        }else{
            $query = dbconnect()->prepare('INSERT INTO comment_table SET full_name=?, email=?, comment=?, post_id=?,comment_time=?');
            if($query->execute([$name,$email,$comment,$id,$time])){
                header('location:single-post.php');
            }
        }
    }



?>

<meta property="og:url"           content="https://www.lead360.ng/single-post?id=11#" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="lead360 magazines" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />



<meta property="og:url"             content="https://www.lead360.ng/single-post?id=11#" />
<meta property="og:title"           content="A Twitter for My Sister" />
<meta property="og:description"     content="lead360 magazines" />
<meta property="og:image"           content="http://graphics8.nytimes.com/images/2011/12/08/technology/bits-newtwitter/bits-newtwitter-tmagArticle.jpg" />


            <!-- header end  -->
            <!-- javascript script tag -->

            <div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <div id="tw-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://twitter.com/intent/tweet?url=https%3A%2F%2Fparse.com";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>




           
            <!-- wrapper -->


            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <!--section   -->
                    <!-- <div class="breadcrumbs-header fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs-header_url">
                                <a href="#">Home</a><span>About</span>
                            </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover</span>
                            </div>
                        </div>
                        <div class="pwh_bg"></div>
                    </div> -->
                    <!-- section end  -->
                        <div class="breadcrumbs-section fl-wrap">
                            <div class="container">
                                <div class="breadcrumbs-header_url">
                                    <a href="index">Home</a><span><?php echo $category?></span>
                                </div>
                                <!--<div class="share-holder hor-share">-->
                                <!--    <div class="share-title">Share:</div>-->
                                <!--    <div class="share-container isShare"></div>-->
                                <!--    <a href="https://wa.me/?text=www.lead360.ng/single-post?id=<?php echo $catID ?>" data-action="share/whatsapp/share"><img src="images/whatsapp.png" style="width:50px; height:50px; margin-top:2px;"></a>-->
                                <!--</div>-->
                            </div>
                            <div class="pwh_bg"></div>
                        </div>
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                            <?php
                                        $query = "SELECT * FROM post WHERE id='$catID'";
                                        $result = mysqli_query($connect,$query);
                                        while($row=mysqli_fetch_assoc($result)) {
                                          $id = $row['id'];
                                          $title = $row['title'];
                                          $category = $row['cat_id'];
                                          $author = $row['author'];
                                          $image = $row['image'];
                                          $description = $row['description'];  
                                          $summary = $row['summary'];
                                          $created = $row['created_on'];
                                          // $desc=  substr(html_entity_decode($description), 30, 400); 
                                          $query2 = "SELECT * FROM category WHERE id='$category'";
                                          $result2 = mysqli_query($connect,$query2);
                                          $ro = mysqli_fetch_assoc($result2);
                                          $cat_name = $ro['cat_name'];

                                       
                                        ?>  
                                    <div class="main-container fl-wrap fix-container-init">
                                        <!-- single-post-header  -->
                                        <div class="single-post-header fl-wrap">
                                            <a class="post-category-marker" href="category.php?id=<?php echo $id; ?>"><?php echo $cat_name; ?></a>
                                            <div class="clearfix"></div>
                                            <h1><?php echo $title; ?></h1>
                                            <h4><?php echo $summary; ?></h4>
                                            <div class="clearfix"></div>
                                            <div class="author-link"><a href=""><img src="lead360_Admin/uploads/<?php echo $image; ?>" alt="">  <span>By <?php echo $author; ?></span></a></div>
                                            <span class="post-date"><i class="far fa-clock"></i> <?php echo $created; ?></span>
                                            <ul class="post-opt">
                                                <?php 
                                                    $queryCount = "SELECT * FROM comment_table WHERE post_id='$id'";
                                                    $resultCount = mysqli_query($connect,$queryCount);
                                                    $countComments = mysqli_num_rows($resultCount);
                                                
                                                
                                                
                                                
                                                
                                                ?>
                                                <li><i class="far fa-comments-alt"></i><?php echo $countComments ?></li>
                                                <!-- <li><i class="fal fa-eye"></i>  980 </li> -->
                                            </ul>
                                        </div>
                                        <!-- single-post-header end   -->
                                        <!-- single-post-media   -->
                                        <div class="single-post-media fl-wrap">
                                            <div class="single-slider-wrap fl-wrap">
                                                <div class="single-slider fl-wrap">
                                                    <div class="swiper-container">
                                                        <div class="lightgallery">
                                                            <!-- swiper-slide   -->
                                                            <div class="swiper-slide hov_zoom">
                                                                <img src="lead360_Admin/uploads/<?php echo $image; ?>"alt="">
                                                                <a href="lead360_Admin/uploads/<?php echo $image; ?>" class="box-media-zoom   popup-image"><i class="fas fa-search"></i></a>
                                                                
                                                            </div>


                                                            <!-- swiper-slide end   -->
                                                            <!-- swiper-slide   -->
                                                            
                                                            <!-- swiper-slide end   -->
                                                            <!-- swiper-slide   -->
                                                            
                                                            <!-- swiper-slide end   -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ss-slider-controls2">
                                                    <div class="ss-slider-pagination pag-style"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-post-media end   -->
                                        <!-- single-post-content   -->
                                        
                                        <div class="single-post-content  fl-wrap">
                                            <div class="fs-wrap smpar fl-wrap">
                                                <div class="fontSize"><span class="fs_title">Font size: </span><input type="text" class="rage-slider" data-step="1" data-min="13" data-max="18" value="14"></div>
                                                <div class="share-holder hor-share">
                                                    <div class="share-title">Share:</div>
                                                    <div class="share-container isShare"></div>
                                                     <!--<a href="whatsapp://send?text=www.lead360.ng/single-post?id=<?php echo $catID ?>" data-action="share/whatsapp/share"><img src="images/whatsapp.png" style="width:50px; height:50px; margin-top:2px;"></a>-->
                                                     <a href="https://wa.me/?text=https://www.lead360.ng/single-post?id=<?php echo $catID ?>" data-action="share/whatsapp/share" target="_blank"><img src="images/whatsapp.png" style="width:50px; height:50px; margin-top:2px;"></a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="single-post-content_text" style="word-break: break-word; text-align: left;" id="font_chage">
                                                <?php
                                                $checkHtml = html_entity_decode(htmlspecialchars_decode($description)); 
                                                echo "<div class='hear_word'>$checkHtml</div>";
                                                ?>
                                            </div>
                                           
                                            <!-- single-post-nav"   -->
                                            
                                            <!-- single-post-nav"  end   -->
                                        </div>
                                        <!-- single-post-content  end   -->
                                        <div class="limit-box2 fl-wrap"></div>
                                        <!-- post-author-->                                   
                                        <div class="post-author fl-wrap">
                                            
                                           
                                           
                                        </div>
                                        <!--post-author end-->      
                                        <div class="more-post-wrap  fl-wrap">
                                            <div class="pr-subtitle prs_big">Related Posts</div>
                                            <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                                <div class="row">
                                                    <?php

                                                    $query12 = "SELECT * FROM post Where not id='$id' && cat_id='$category' order by rand() LIMIT 2";
                                                    $result12 = mysqli_query($connect,$query12);
                                                    while($rowld=mysqli_fetch_assoc($result12)) {
                                                        $idld = $rowld['id'];
                                                        $catId = $rowld['cat_id'];
                                                        $picture = $rowld['image'];
                                                        $summary = $rowld['summary'];
                                                        $header = $rowld['title'];
                                                        $datetime = $rowld['created_on'];
                                                    
                                                      // $desc=  substr(html_entity_decode($description), 30, 400); 
                                                        $sql12 = "SELECT * FROM category WHERE id='$catId' ORDER  BY rand() LIMIT 5";
                                                        $res = mysqli_query($connect, $sql12);
                                                        $rowtate = mysqli_fetch_assoc($res);
                                                        $cat_name = $rowtate['cat_name'];
                                                        


                                                    ?>  

                                                    <div class="col-md-6">
                                                        <!--list-post-->	
                                                        <div class="list-post fl-wrap">
                                                            <a class="post-category-marker" href="category.php"><?php echo $cat_name; ?></a>
                                                            <div class="list-post-media">
                                                            <a href="single-post.php?id=<?php echo $idld; ?>">
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="lead360_Admin/uploads/<?php echo $picture; ?>"></div>
                                                                </div>
                                                            </a>
                                                            <span class="post-media_title">&copy; Image Credit <?php echo $summary ?></span>
                                                            </div>
                                                            <div class="list-post-content">
                                                                <h3><a href="single-post.php?id=<?php echo $header; ?>"></a></h3>
                                                                <span class="post-date"><i class="far fa-clock"></i>/<?php echo $datetime; ?></span>
                                                            </div>
                                                        </div>
                                                        <!--list-post end-->						  
                                                    </div>
                                                    <?php } ?>
                                                </div> <!--row end-->
                                            </div>
                                        </div>
                                        <!--comments  -->
                                        <div id="comments" class="single-post-comm fl-wrap">
                                            <div class="pr-subtitle prs_big">Comments </div>
                                            <ul class="commentlist clearafix">

                                                <?php
                                                
                                                
                                                $commQuery = "SELECT * FROM comment_table WHERE post_id='$id'";
                                                $commConnect = mysqli_query($connect,$commQuery);
                                                while($row=mysqli_fetch_assoc($commConnect)) {

                                                    $id = $row['id'];                                                    
                                                    $full_name = $row['full_name'];
                                                    $comment = $row['comment'];
                                                    $comment_time = $row['comment_time'];
                                                
                                                ?>

                                              
                                                   

                                            
                                                <li class="comment">
                                                    <div class="comment-author">
                                                        <img alt="" src="lead360_admin/images/dummy.jpg" width="50" height="50">
                                                    </div>
                                                    <div class="comment-body smpar">
                                                        <h4><a><?php echo $full_name; ?></a></h4>
                                                        <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                                        <div class="show-more-snopt-tooltip bxwt">
                                                            <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                                                            <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p><?php echo $comment; ?></p>
                                                        <a class="comment-reply-link" href="#"><i class="fas fa-reply"></i> Reply</a>
                                                        <div class="comment-meta"><i class="far fa-clock"></i> <?php echo $comment_time; ?></div>
                                                        <div class="comment-body_dec"></div>
                                                    </div>
                                                </li>
                                                <?php } ?>

                                            </ul>
                                            <div class="clearfix"></div>
                                            <div id="addcom" class="clearafix">
                                                <div class="pr-subtitle"> Leave A Comment <i class="fas fa-caret-down"></i></div>

                                                <?php
                                                    if($error != ""){
                                                        echo $error;
                                                    }
                                                ?>
                                                <div class="comment-reply-form fl-wrap">
                                                    <form method="POST" id="add-comment" class="add-comment custom-form">
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="fullname" placeholder="Your Name *" value="" />
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" name="email" placeholder="Email Address*" value="" />
                                                                </div>
                                                            </div>
                                                            <textarea name="comment" placeholder="Your Comment:"></textarea>
                                                        </fieldset>
                                                        
                                                        <button class="btn float-btn color-btn" type="submit" name="submit">  Submit Comment <i class="fas fa-caret-right"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--end respond-->
                                        </div>
                                        <!--comments end -->                      
                                    </div>
                                    <?php } ?>

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
                                            <div class="box-widget-content">
                                                <div class="banner-widget fl-wrap" style="height: 500px;">
                                                    <div class="bg-wrap bg-parallax-wrap-gradien">
                                                        <div class="bg" data-bg="images/all/advert.jpeg"></div>
                                                    </div>
                                                    <!-- <div class="banner-widget_content">
                                                        <h5><?php //echo $title ?></h5>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->                    
                                        <!-- box-widget -->
                                        <button id="modalBtn" type="button" onclick="modalactive()" style="display: none;">View details</button>
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Categories</div>
                                            <div class="box-widget-content">
                                                <ul class="cat-wid-list">
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
                                                    <li><a href="category?id=<?php echo $id_num; ?>"><?php echo $cat_name ?></a><span><?php echo $counting ?></span></li>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        <!-- box-widget -->
                                        <!-- <div class="box-widget fl-wrap">
                                            <div class="widget-title">Popular Tags</div>
                                            <div class="box-widget-content">
                                                <div class="tags-widget">
                                                    <a href="#">Science</a>
                                                    <a href="#">Politics</a>
                                                    <a href="#">Technology</a>
                                                    <a href="#">Business</a>
                                                    <a href="#">Sports</a>
                                                    <a href="#">Food</a>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- box-widget  end -->                        
                                        <!-- box-widget -->
                                       <!--  <div class="box-widget fl-wrap">
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
                                        </div> -->
                                        <!-- box-widget  end -->                        
                                        <!-- box-widget -->
                                       
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
                            <img src="images/all/mainadvert.png" class="respimg" alt="">
                        </div>
                    </div>
                    <!--about end   -->
                </div>
                <!-- content  end-->

<!-- 
                                           <div class="col-md-6">
                                           <div class="box-widget fl-wrap">
                                            <div class="widget-title">Meet The Team Members</div>
                                            <div class="box-widget-content" >
                                                <ul class="cat-wid-list">
                                                    <li><a href="#">Samuel Mba</a><span>Editor- in -Chief</span></li>
                                                    <li><a href="#">Sivernus  Patrick</a> <span>Communications</span></li>
                                                    <li><a href="#">Nuvie. Mba</a> <span>Administration</span></li>
                                                    <li><a href="#">Victor Placid</a> <span>Marketing</span></li>
                                                    <li><a href="#">Ifeanyi Omemi</a> <span>Consulting Editor</span></li>
                                                </ul>
                                            </div>
                                        </div> 
                                        </div> -->

                                        <div id="simpleModal" onclick="modalabtclsbody()" class="modalchange">
                                            <div class="modal-content" onclick="event.stopPropagation()">
                                                    <div class="revit">
                                                        <span class="closeBtnX">&times;</span>
                                                    </div>

                                                <div class="modalbody">
                                                    <!-- footer-widget -->
                                                    <div class="col-md-12">
                                                        <div class="footer-widget">
                                                            <div class="footer-widget-title" style="color: #c62b11;">Subscribe to our newsletter.</div>
                                                            <hr style="position: relative; top: -30px;">
                                                            <div class="footer-widget-content">
                                                                <div class="subcribe-form fl-wrap">
                                                                    <p style="color: #514c4c;">Want to get notifications on essential latest posts sent to your E-mail? Please sign up.</p>
                                                                    <form id="form-wizard3" method="POST" class="fl-wrap rapping">
                                                                        <input class="enteremail" name="subEmail" id="emInput" placeholder="Enter valid email address..." spellcheck="false" type="text">
                                                                        <button style="color: #e93314; background-color:#c62b11; border-radius: 10px;" type="submit" class="subscribe-button"><p class="button-class" style="color: #fff; text-align: center; font-weight: 600;">Send</p> </button>
                                                                        <label for="subscribe-email" class="subscribe-message"></label>
                                                                        <p id="form-message"></p>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- footer-widget  end-->


                                                    
                                                </div>

                                                <div class="revitdown">
                                                    <div class="copy_right" style="color: #fff; ">
                                                        <?php echo date('Y').' '?> &copy; Copyright. Lead360 Magazine.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                <!-- footer -->
              <?php include 'footer.php' ?>
                <!-- footer end-->
        </div>
        <script>
            $(document).ready(function(){
                $(".share-icon-facebook").css('color', '#2f2fe3');
                $(".share-icon-twitter").css('color', '#2f2fe3');
                // $(".share-icon-pinterest").css('color', 'blue');
                $(".share-icon-linkedin").css('color', '#ddd');
            })
            
        </script>

        <script>
            $(document).ready(function(){
                setTimeout(function() {
                    $('#modalBtn').trigger('click');
                    $('.modal-content').addClass('animate__animated animate__zoomIn');
                }, 1000);
                $('.closeBtnX').on("click", function(){
                        var simpleModal = document.getElementById('simpleModal');
                        simpleModal.classList.remove("showingit");
                        simpleModal.classList.remove("flexingit");
                        // simpleModal.css('opacity', '0');
                        
                });
            });
            
        </script>

<script>
    $(document).ready(function(){
        $("#form-wizard3").submit(function(event){
            event.preventDefault();

            var form_data = new FormData(this);

               $.ajax({
                  url: "send.php",
                  type: "POST",
                  data: form_data,
                  datatype: "JSON",
                  cache: false,
                  processData: false,
                  contentType:false,
                  success:function(data){
                     $("#form-message").html(data);
                  }
               })
        });
    });
</script>


    </body>

<!-- Mirrored from gmag.kwst.net/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 10:47:10 GMT -->
</html>