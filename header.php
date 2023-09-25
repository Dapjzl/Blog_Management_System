
        <!--=============== basic  ===============-->
        <meta charset="ISO-8859-1">
        <title>Lead360 Magazines</title>
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />

        
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/faviconnnn.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    
    <body>
        <!-- main start  -->
        <div id="main">
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- progress-bar end -->
            <!-- header -->
            <header class="main-header">
                <!-- top bar -->
                <div class="top-bar fl-wrap">
                    <div class="container">
                        <div class="date-holder">
                            <span class="date_num"></span>
                            <span class="date_mounth"></span>
                            <span class="date_year"></span>
                        </div>
                        <div class="header_news-ticker-wrap">
                            <div class="hnt_title">Hot Posts :</div>
                            <div class="header_news-ticker fl-wrap">
                                <ul>
                                    <?php
                                    

                                        $queryto = "SELECT * FROM post";
                                        $resultto = mysqli_query($connect,$queryto);
                                        while($rowto=mysqli_fetch_assoc($resultto)) {
                                          $idto = $rowto['id'];
                                          $titleto = $rowto['title'];
                                          $authorto = $rowto['author'];
                                          $summaryto = $rowto['summary'];
                                          $createdto = $rowto['created_on'];
                                          // $desc=  substr(html_entity_decode($description), 30, 400); 

                                        ?>
                                    <li>
                                        <a href="single-post?id=<?php echo $idto ?>">
                                            <?php echo $titleto; ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="n_contr-wrap">
                                <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                                <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                            </div>
                        </div>
                        <!--<ul class="topbar-social">-->
                        <!--    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>-->
                        <!--    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>-->
                        <!--    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>-->
                        <!--    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>-->

                        <!--</ul>-->
                    </div>
                </div>
                <!-- top bar end -->
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <!-- logo holder  -->
                        <a href="index" class="logo-holder">
                            <img class="logo-top" src="images/lead360logo.png" alt="" width="270" height="50">
                        </a>
                        <!-- logo holder end -->
                        <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>
                        <div class="srf_btn htact show-reg-form"><i class="fal fa-user"></i> <a href="lead360_Admin/index" class="header-tooltip">Sign In</a></div>
                        <!-- <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Cart</span></div> -->
                        <!-- header-search-wrap -->
                        <div class="header-search-wrap novis_sarch">
                            <div class="widget-inner">
                                <fozrm action="#">
                                    <input name="se" list="searchlist" type="text" class="search" placeholder="Search..." value="" onkeyup="select_page(this.value)">
                                    <ul id="searchlist" style="transform: translateY(15px);">

                                    </ul>
                                    <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!-- header-search-wrap end -->
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li><a href="index" class="">Home</a></li>
                                        <?php
                                            $queryfine = "SELECT * FROM category";
                                            $resultfine = mysqli_query($connect,$queryfine);
                                            while($rowfine=mysqli_fetch_assoc($resultfine)) {
                                              $idfine = $rowfine['id'];
                                              $catnamefine = $rowfine['cat_name'];


                                            ?>
                                            <li><a href="category?id=<?php echo $idfine; ?>"><?php echo $catnamefine; ?></a></li>

                                        <?php } ?>
                                        <!--second level end-->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                    </div>
                </div>
            </header>
            <!-- header end  -->
            <script>
                function select_page(post_name){
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function(){
                   if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("searchlist").innerHTML=xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET", "ajax/load_page.php?post_name="+post_name, true);
                xmlhttp.send();
            }
            </script>