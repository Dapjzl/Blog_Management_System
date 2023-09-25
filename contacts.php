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
<?php include 'header.php'; ?>
    
            <!-- header end  -->
            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <!--section   -->
                    <section class="hero-section">
                        <div class="bg-wrap hero-section_bg">
                            <div class="bg" data-bg="images/all/contacts.jpg"></div>
                        </div>
                        <div class="container">
                            <div class="hero-section_title">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div class="breadcrumbs-list fl-wrap">
                                <a href="index.php">Home</a> <span>Contacts</span>
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
                                <div class="col-md-4">
                                    <div class="pr-subtitle prs_big">Details</div>
                                    <!--card-item -->
                                    <ul class="contacts-list fl-wrap">

                                        <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">08024017675,  08088515033, 08100094460</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">Inscorpng@gmail.com</a></li>
                                        <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">Inscorp Limited,  2Martina Ifediora Street, </a></li>
                                        <!-- <li><a href="#">Royal Manor Estate Lekki, Lagos,Nigeria</a></li> -->
                                    </ul>
                                    <!--card-item end -->
                                    <div class="contact-social fl-wrap">
                                        <span class="cs-title">Find us on: </span>
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- box-widget -->
                                    <!-- <div class="box-widget-content fl-wrap">
                                        <div class="banner-widget fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg  " data-bg="images/bg/6.jpg"></div>
                                            </div>
                                            <div class="banner-widget_content">
                                                <h5>Visit our awesome merch and souvenir online shop.</h5>
                                                <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- box-widget  end -->				
                                </div>
                                <div class="col-md-8">
                                    <div class="pad-con fl-wrap">
                                        <div class="pr-subtitle prs_big">Drop us a line</div>
                                        <!-- <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p> -->
                                        <div id="contact-form" style="margin-top: 20px;">
                                            <div id="message"></div>
                                            <form  class="custom-form" action="http://gmag.kwst.net/php/contact.php" name="contactform" id="contactform">
                                                <fieldset>
                                                    <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                                    <input type="text"  name="email" id="email" placeholder="Email Address*" value=""/>
                                                    <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                </fieldset>
                                                <button class="btn   color-bg float-btn" id="submit">Send message <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                        <!-- contact form  end--> 					
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- content  end-->
                <!-- footer -->
                
                <!-- footer end--> 
 			  <?php include 'footer.php' ?>
             