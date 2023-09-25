<?php include 'header.php'; ?>

            <!-- header end  -->
            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <!--section   -->
                    <div class="breadcrumbs-header fl-wrap">
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
                    </div>
                    <!-- section end  -->
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="section-title sect_dec">
                                        <h2>Our Story</h2>
                                        </div>
                                    <div class="about-wrap">
                                        <p>Lead360 Magazine is published by Inscorp Limited. It’s a magazine that seeks to raise the game of current and potential leaders.</p>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="section-title sect_dec">
                                        <h2>Our Vision Statement</h2>
                                        </div>
                                        <div class="about-wrap">
                                        <p>To provide leaders with content that helps them perform at their best.</p>
                                    </div>

                                    <br>
                                    <br>

                                    <div class="section-title sect_dec">
                                        <h2>Our Mission Statement</h2>
                                        </div>
                                        <div class="about-wrap">
                                        <p>Help leaders develop capacity for excellent task execution, people engagement, and self-government while promoting excellent leadership values.</p>
                                    </div>
                                </div>

                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <div class="about-img fl-wrap">
                                        <img src="images/all/aboutpic.jpg" class="respimg" alt="">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sec-dec"></div>
                    </section>
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

<!-- Mirrored from gmag.kwst.net/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 10:47:10 GMT -->
</html>