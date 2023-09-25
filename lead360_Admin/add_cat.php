<?php
 include 'header.php' ;


?>
<?php


    if (isset($_POST['submit'])) {
        $catname = check_input($_POST['catname']);
        // $username = check_input($_POST['username']);
        $created = date('Y-m-d');

        if (empty($catname)) {
            echo "<script>alert('Category name is required!!!')</script>";
        }else{
          

        $sql = dbconnect()->prepare("SELECT * from category WHERE cat_name=?");
        $sql->execute([$catname]);
        if($sql->rowcount() > 0){
            echo "<script> alert('Category Already Exists!!!');</script>";
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
                      if ($size < 3000000) {
                          $newName = uniqid('',true) . "." . $mainExt;

                          $destination = 'uploads/' . $newName;
                          
                          
                          

                          $reg = dbconnect()->prepare("INSERT INTO category SET cat_name=?, creator=?, created=?,img=?");
                          $reg->execute([$catname,$username,$created,$newName]);
                          if($reg){
                            $upload = move_uploaded_file($source,$destination);
                            echo "<script> alert('Operation Successful!!!'); window.location='view_cat.php';</script>";
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
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="catname" placeholder="Enter Category Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Image</label>
                    <input type="file" class="form-control"  name="image" placeholder="Enter Category Name">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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