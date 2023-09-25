<?php
 include 'header.php' ;



 if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // $getData = $connect->query("SELECT * FROM slider WHERE id = $id");
  // if (mysqli_num_rows($getData) > 0) {
  //   $row = $getData->fetch_array();
  //   $title = $row['slider_title'];
  //   $cat = $row['category'];
  //   $author = $row['author'];
  //   $news_sum = $row['news_summary'];
  // }else{
  //   echo "<script> alert('An error 2!!!');</script>";
  // }
}

$getData = $connect->query("SELECT * FROM slider ");
  if (mysqli_num_rows($getData) > 0) {
    $row = $getData->fetch_array();
    $title = $row['slider_title'];
    $cat = $row['category'];
    $author = $row['author'];
    $news_sum = $row['news_summary'];
  }else{
    echo "<script> alert('An error 2!!!');</script>";
  }

?>
<?php
if (isset($_POST['update'])) {
    $title = check_input($_POST['title']);
    $cat = check_input($_POST['category']);
    $author = check_input($_POST['author']);
    $news_sum = check_input($_POST['news_summary']);
    $created = date("Y-m-d/H:i:s A");

    if (empty($title) || empty($cat) || empty($author) || empty($news_sum)) {
        echo "<script>alert('You have not completed all required fields!!!')</script>";
    }else{

      $reg = dbconnect()->prepare("UPDATE slider SET slider_title=?, category=?, author=?, news_summary=?, created_on=? WHERE id='$id'");
        $reg->execute([$title,$cat,$author,$news_sum,$created]);
        if($reg){
                echo "<script> alert('Update Successful!!!'); window.location='manage_slider.php';</script>";
        }else{
        echo "<script> alert ('Oops, Operation Failed TRY AGAIN LATER!!!');</script>";
        }
    }
  }

    if (isset($_POST['submit'])) {
        $title = check_input($_POST['title']);
        $cat = check_input($_POST['category']);
        $author = check_input($_POST['author']);
        $summary = check_input($_POST['news_summary']);
        $created = date("Y-m-d");

        if (empty($title) || empty($cat) || empty($summary) || empty($author)) {
            echo "<script>alert('You have not completed all required fields!!!')</script>";
        }else{
                $mainImage = $_FILES['image']['name'];
                $source = $_FILES['image']['tmp_name'];
                $error = $_FILES['image']['error'];
                $size = $_FILES['image']['size'];
                $type = $_FILES['image']['type'];

                $fileExt = explode('.',$mainImage);
                $mainExt = strtolower(end($fileExt));

                $allow = array('jpeg','png','jpg','bmp','gif');
                // in_array()

                if (in_array($mainExt, $allow)) {
                    if ($error === 0) {
                        if ($size < 5000000) {
                            $newName = uniqid('',true) . "." . $mainExt;

                            $destination = 'uploads/' . $newName;

                            
                            
                            $upload = move_uploaded_file($source,$destination);

                            
                                $reg = dbconnect()->prepare("INSERT INTO slider SET slider_title=?, category=?, author=?, image=?, created_on=?, news_summary=?");
                                $reg->execute([$title,$cat,$author,$newName,$created,$summary]);
                                if($reg){
                                        echo "<script> alert('Operation Successful!!!'); window.location='add_slider.php';</script>";
                                }else{
                                echo "<script> alert ('Oops, Operation Failed TRY AGAIN LATER!!!');</script>";
                                }
                            
            }else {
                echo "<script> alert('File size is too big!!!');</script>";
            }
        }else {
            echo "<script> alert('An error occurred!!!');</script>";
        }
    }else {
        echo "<script> alert('File extension is not supported!!!');</script>";
    }
}
}




// if (isset($_GET['id'])) {
//   $id = $_GET['id'];
//   $getData = $connect->query("SELECT * FROM slider WHERE id = $id");
//   if (mysqli_num_rows($getData) > 0) {
//     $row = $getData->fetch_array();
//     $title = $row['slider_title'];
//     $cat = $row['category'];
//     $author = $row['author'];
//     $news_sum = $row['news_summary'];
//   }else{
//     echo "<script> alert('An error 2!!!');</script>";
//   }
// }


?>





<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9 mt-3 ml-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                    
                        <div class="form-group col-md-7">
                        <label for="exampleInputEmail1">Slider Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter post title here...">
                      </div>

                      <div class="form-group col-md-5">
                        <label for="exampleInputPassword1">Category</label>
                        <select type="text" class="form-control" id="exampleInputPassword1" name="category">
                            <?php if(!isset($_GET['id']))
                              echo "<option disabled selected>...</option>"
                            ?>
                            <?php

                            $query = "SELECT * FROM category";
                            $result = mysqli_query($connect,$query);
                            while($row=mysqli_fetch_assoc($result)) {
                              $id = $row['id'];
                              $catname = $row['cat_name'];


                            ?>
                            <?php 
                              if(isset($_GET['id'])){?>
                                <option value="<?php echo $catname; ?>" <?php if ($cat == $catname) {echo "selected";}?>><?php echo $catname; ?></option>
                            <?php 
                             }else{
                            ?>
                            <option value="<?php echo $catname; ?>"><?php echo $catname; ?></option>
                        <?php } } ?>
                        </select>
                      </div>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input type="text"  class="form-control" id="exampleInputEmail1" name="author" placeholder="Enter Name of Author">
                  </div>

                 
                  <div class="custom-file mt-3">
                      <input type="file" name="image" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                 
                  
                  <div class="form-group mt-3">
                    <label for="exampleInputEmail1">News Summary</label>
                    <textarea class="form-control" maxlength="300" id="exampleInputEmail1" name="news_summary" placeholder="Enter post Summary here..."></textarea>
                  </div>


                       
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 
                  <button type="submit" name="submit" class="btn btn-primary">Post</button>

                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
    </div>
</section>

</div>

<?php
 include 'footer.php' ;


?>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page specific script -->
<!-- <script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script> -->