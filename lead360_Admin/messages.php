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
            <h1>Messages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Messages</li>
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

                    $query = "SELECT * FROM messages";
                    $result = mysqli_query($connect,$query);
                    while($row=mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $sender = $row['sender'];
                      $sendermail = $row['sendermail'];
                      $subject = $row['subject'];
                      $msg = $row['msg'];
                      $created = $row['created'];
                      // $desc=  substr(html_entity_decode($description), 30, 400); 

                    ?>


                    <tr>
                    
                      <td class="mailbox-name"><a href="view_msg?id=<?php echo $id ?>"><?php echo $sender; ?></a></td>
                      <td class="mailbox-subject"><a class="text-dark" href="view_msg?id=<?php echo $id ?>"><b><?php echo $sendermail; ?></b> - <?php echo $subject ;?></a>
                      </td>
                      <!-- <td class="mailbox-attachment"></td> -->
                      <td class="mailbox-date"><?php echo $created; ?></td>
                      <td class="mailbox-date">
                      <a href="view_msg?id=<?php echo $id ?>"  class="text-info"><i class="fa fa-eye"></i> 
                        </a>
                        <a href="del_msg?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete ?')" class="text-danger"><i class="fa fa-trash-alt"></i> 
                        </a>
                        
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