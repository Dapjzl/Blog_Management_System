<?php
 include 'header.php' ; 
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- <div class="container-fluid"> -->
      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <!-- <h3 class="card-title">In</h3> -->

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" name="name" id="search" class="form-control" placeholder="Search Post">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped" style="min-height: 80px;">
                  <tbody id="output">
                    

                    <?php

                    $query = "SELECT * FROM post";
                    $result = mysqli_query($connect,$query);
                    while($row=mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $title = $row['title'];
                      $img = $row['image'];
                      $author = $row['author'];
                      $summary = $row['summary'];
                      $created = $row['created_on'];
                      $queryView = "SELECT * FROM views WHERE post_id='$id'";
                      $resultVisit = mysqli_query($connect,$queryView);
                      $postView = mysqli_num_rows($resultVisit);


                      // $desc=  substr(html_entity_decode($description), 30, 400); 

                    ?>


                    <tr>
                    <td class="mailbox-name"><img style="width: 50px; height: 50px;" src="uploads/<?php echo $img?>" alt="" srcset=""></td>
                      <td class="mailbox-name"><a href="read-mail.html"><?php echo $author; ?></a></td>
                      <td class="mailbox-subject"><b><?php echo $title; ?></b> - <?php echo $summary ;?>
                      </td>
                      <td class="mailbox-attachment"><b><?php echo $postView; ?> views</b></td>
                      <td class="mailbox-date"><?php echo $created; ?></td>
                      <td class="mailbox-date">
                        <a href="del_post.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete ?')" class="text-danger"><i class="fa fa-trash-alt"></i></a>
                        <a href="edit_post.php?id=<?php echo $id ?>" class="text-primary ml-2"><i class="fa fa-edit"></i></a>
                        <a href="../single-post.php?id=<?php echo $id ?>" class="text-primary ml-2"><i class="fa fa-eye"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>




        
        <!-- </div> -->
    </section>




</div>





<?php
 include 'footer.php' ;


?>


<script>
$(document).ready(function(){
  $("#search").keyup(function(){
    $.ajax({
      type:"POST",
      url:"connect/search.php",
      data:{
        name:$("#search").val(),
      },
      beforesend:function(){
        $("#output").hide();
      },
      success:function(data){
      $("#output").html(data);
    }
    });
  });
});
</script>