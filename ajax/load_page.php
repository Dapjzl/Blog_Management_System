<?php include ('../lead360_Admin/connect/db.php');

    $postname = $_GET['post_name'];

    $search = "SELECT * FROM post WHERE title LIKE '%".$postname."%'";
    $res = mysqli_query($connect, $search);
    $n = 0;
    while($fetchpost=mysqli_fetch_assoc($res)){
        $n++;
        $getid = $fetchpost['id'];
        $posttitle = $fetchpost['title'];
?>
            <li class="listing">
                <a href="single-post?id=<?php echo $getid ?>" class="stylist">
                    <?php //echo $n. ' . ' .$posttitle
                        if (strlen($posttitle)>50) {
                            $subbed = substr($posttitle,0,50);
                           echo $n.' . '.$subbed.'...';
                        }else{
                            echo $n. ' . ' .$posttitle;
                        }
                    ?>
                </a>
            </li>
<?php
    }

?>