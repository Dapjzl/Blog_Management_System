<?php
 include 'header.php' ;

$msgid = $_GET['id'];

$query33 = dbconnect()->prepare("SELECT * FROM messages WHERE id=?");
$query33->execute([$msgid]);
$row = $query33->fetch();
    $id = $row['id'];
    $sender = $row['sender'];
    $sendermail = $row['sendermail'];
    $subject = $row['subject'];
    $msg = $row['msg'];
    $created = $row['created'];
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
                <h3 class="card-title">Message Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                    
                        <div class="form-group col-md-7">
                        <label for="exampleInputEmail1">Sender Name</label>
                        <input type="text" readonly class="form-control" id="exampleInputEmail1" value="<?php echo $sender ?>" name="title" placeholder="Enter post title here...">
                      </div>

                      <div class="form-group col-md-5">
                        <label for="exampleInputPassword1">Sender Email</label>
                        <input type="text" readonly class="form-control" id="exampleInputEmail1" value="<?php echo $sendermail ?>" name="title" placeholder="Enter post title here...">
                      </div>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" readonly value="<?php echo $subject ?>" name="author">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <textarea type="text" class="form-control" rows="20" id="exampleInputEmail1" readonly ><?php echo $msg ?></textarea>
                  </div>


                
                  
                  


                        <!-- Main content -->
                        <!-- <section class="content"> -->
                          
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                
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