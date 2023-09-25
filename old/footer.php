<!-- footer -->
                <footer class="fl-wrap main-footer" style="background-color: #e93314 !important; z-index: 10;" >
                    <div class="container">
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap fl-wrap">
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-content">
                                        <a href="index.php" class="footer-logo"><img src="images/lead360logo2.png" alt="" width="270px" height="50px" ></a>
                                            <p>Lead360 is Nigeria's leading leadership and Management magazine Our vision is to inspire and equip  leaders to perform at their best.
                                            <br> 
                                            By providing cutting edge content we help current and potential leaders develop capacity to effectively oversee self, people and achieve exceptional result.
                                            <br>             
                                            <br>                        
                                            For adverts call :   08088515033<br>
                                            Enquiry :  08088515033<br>
                                            Email us : PUBLISHER@ LEAD360.NG</p>
                                            <div class="footer-social fl-wrap">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Categories</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box fl-wrap" >
                                                <ul>
                                                <?php
                                                    
                                                    $catQuery = dbconnect()->prepare("SELECT * FROM category");
                                                    $catQuery->execute();
                                                    while( $rowCat = $catQuery->fetch() ){

                                                    
                                                    ?>
                                                    <li> <a href="category.php?id=<?php echo $rowCat['id'] ?>"><?php echo $rowCat['cat_name'] ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-2">
                                    <!-- <div class="footer-widget">
                                        <div class="footer-widget-title">Links</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box fl-wrap">
                                                <ul>
                                                    <li> <a href="index.php">Home</a></li>
                                                    <li> <a href="post.php">Posts</a></li>
                                                    <li> <a href="category.php">Category</a></li>
                                                    <li> <a href="lead360tv.php">Lead360TV</a></li>
                                                    <li> <a href="about.php">About</a></li>
                                                    <li> <a href="contact.php">Contact</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- footer-widget  end-->								
                                <!-- footer-widget -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form fl-wrap">
                                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe" class="fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button style="color: #e93314; background-color:#fff;" type="submit" id="subscribe-button" class="subscribe-button">Send </button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                                <div class="copyright-text">
                                            <p> All rights reserved. This material, and other digital content on this website, may not be reproduced,
                                                published, broadcast, rewritten or redistributed in whole or in part without written permission from the publisher.
                                            </p>    
                                        </div>
                                            </div>
                                        </div>
                                           
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->
                    </div>
                    <div class="footer-bottom fl-wrap">
                        <div class="container">
                            <div class="copyright" ><span style="color: #fff !important;">&#169; 2022 Published by Inscorp Limited</span></div>
                            <div class="to-top"> <i class="fas fa-caret-up"></i></div>
                            <!-- <div class="subfooter-nav">
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </footer>
                <!-- footer end-->  			
                <!-- <div class="aside-panel">
                    <ul>
                        <li> <a href="#"><i class="far  fa-podium"></i><span>Politics</span></a></li>
                        <li> <a href="#"><i class="far fa-atom"></i><span>Technology</span></a></li>
                        <li> <a href="#"><i class="far fa-user-chart"></i><span>Business</span></a></li>
                        <li> <a href="#"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
                        <li> <a href="#"><i class="far fa-flask"></i><span>Science</span></a></li>
                    </ul>
                </div> -->
            </div>
            <!-- wrapper end -->
            <!-- cookie-info-bar -->
            
            <!-- cookie-info-bar end -->	
            <!--register form -->
            <!-- <div class="main-register-container">
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
                            <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div> -->
                            <!--tabs -->
                            <!-- <div id="tabs-container">
                                <div class="tab"> -->
                                    <!--tab -->
                                    <!-- <div id="tab-1" class="tab-content first-tab">
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
                                    </div> -->
                                    
                                    <!-- <div class="tab">
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
                                    </div> -->
                                   
                                <!-- /div>
                                <div class="log-separator fl-wrap"><span>or</span></div>
                                <div class="soc-log  fl-wrap">
                                    <p>For faster login or register use your social account.</p>
                                    <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--register form end -->

            <script>
                    function modalactive(){
                        var simpleModal = document.getElementById('simpleModal');
                        simpleModal.classList.add("showingit");
                        simpleModal.classList.add("flexingit");
                    }
            </script>
        <!-- </div> -->
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
        <!-- FOR AJAX -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->

    </body>

<!-- Mirrored from gmag.kwst.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 10:40:01 GMT -->
</html>