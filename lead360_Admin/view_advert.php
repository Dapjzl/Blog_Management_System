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
              <li class="breadcrumb-item active">Adverts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content advert -->
    <section class="content">
 
      <div class="row">
        
        
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
            

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
                <table class="table table-hover table-striped">
                  <tbody id="output">
                    

                    <?php

                    $query = "SELECT * FROM advert";
                    $result = mysqli_query($connect,$query);

                    while($row=mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $title = $row['title'];
                      $description = $row['description'];
                      $created = $row['created'];
                      // $desc=  substr(html_entity_decode($description), 30, 400); 

                    ?>


                    <tr>
                      <td class="mailbox-name"><a href="read-mail.html"><?php echo $title; ?></a></td>
                      <td width="50%" class="mailbox-subject">
                        <!-- <?php // echo html_entity_decode($description); ?> -->
                      </td>
                      <!-- <td class="mailbox-attachment"></td> -->
                      <td class="mailbox-date"><?php echo $created; ?></td>
                      <td class="mailbox-date">
                        <a href="del_advert?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete ?')" class="text-danger"><i class="fa fa-trash-alt"></i> 
                        </a>
                        <a href="edit_advert.php?id=<?php echo $id ?>" class="text-primary ml-2"><i class="fa fa-edit"></i> 
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