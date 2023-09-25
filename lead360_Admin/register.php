<?php
 include 'header.php' ;
?>
<?php


    if (isset($_POST['submit'])) {
        $username = check_input($_POST['username']);
        $phone = check_input($_POST['phone']);
        $email = check_input($_POST['email']);
        $pass = md5(check_input($_POST['password']));
        $created = date('Y-m-d');

        if (empty($username) || empty($phone) || empty($email) || empty($pass)) {
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
                        if ($size < 3000000) {
                            $newName = uniqid('',true) . "." . $mainExt;

                            $destination = 'uploads/' . $newName;

                            $sql = dbconnect()->prepare("SELECT * from user WHERE email=?");
                            $sql->execute([$email]);
                            if($sql->rowcount() > 0){
                                echo "<script> alert('Email Already Exists!!!');</script>";
                                }else{
                            $upload = move_uploaded_file($source,$destination);

                            
                                $reg = dbconnect()->prepare("INSERT INTO user SET username=?, phone=?, email=?, password=?, img=?, created=?");
                                $reg->execute([$username,$phone,$email,$pass,$newName,$created]);
                                if($reg){
                                        echo "<script> alert('Registration Successful!!!'); window.location='view_accounts.php';</script>";
                                }else{
                                echo "<script> alert ('Oops, Operation Failed TRY AGAIN LATER!!!');</script>";
                                }
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
                <h3 class="card-title">Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Phone number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                   <!--  <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file"> -->
                        <input type="file" name="image" class="" id="">
                       <!--  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div> -->
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
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