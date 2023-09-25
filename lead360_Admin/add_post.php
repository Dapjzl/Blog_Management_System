<?php
 include 'header.php' ;


?>
<?php


    if (isset($_POST['submit'])) {
        $title = check_input($_POST['title']);
        $cat = check_input($_POST['category']);
        $author = check_input($_POST['author']);
        $summary = check_input($_POST['summary']);
        $description = $_POST['description'];
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
                        if ($size < 7000000) {
                            $newName = uniqid('',true) . "." . $mainExt;

                            $destination = 'uploads/' . $newName;

                            
                            
                            $upload = move_uploaded_file($source,$destination);

                            
                                $reg = dbconnect()->prepare("INSERT INTO post SET title=?, cat_id=?, author=?, description=?, image=?, created_on=?, summary=?");
                                $reg->execute([$title,$cat,$author,$description,$newName,$created,$summary]);
                                if($reg){
                                        echo "<script> alert('Operation Successful!!!'); window.location='view_posts.php';</script>";
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
                <h3 class="card-title">Add Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                    
                        <div class="form-group col-md-7">
                        <label for="exampleInputEmail1">Post Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter post title here...">
                      </div>

                      <div class="form-group col-md-5">
                        <label for="exampleInputPassword1">Category</label>
                        <select type="text" class="form-control" id="exampleInputPassword1" name="category">
                            <option value="">...</option>
                            <?php

                            $query = "SELECT * FROM category";
                            $result = mysqli_query($connect,$query);
                            while($row=mysqli_fetch_assoc($result)) {
                              $id = $row['id'];
                              $catname = $row['cat_name'];


                            ?>
                            <option value="<?php echo $id; ?>"><?php echo $catname; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="author" placeholder="Enter Name of Author">
                  </div>


                  <div class="custom-file mt-3">
                      <input type="file" name="image" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  
                  
                  <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Image Copyright</label>
                    <input type="text" class="form-control" maxlength="75" id="exampleInputEmail1" name="summary" placeholder="Enter Image copyright here...">
                  </div>


                        <!-- Main content -->
                        <!-- <section class="content"> -->
                          <div class="row mt-3">
                            <div class="col-md-12">
                              <div class="card card-outline card-info">
                                <div class="card-header">
                                  <h3 class="card-title">
                                    News Body
                                  </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <textarea name="description" id="summernote">
                                   
                                  </textarea>
                                </div>
                               
                              </div>
                            </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
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
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>