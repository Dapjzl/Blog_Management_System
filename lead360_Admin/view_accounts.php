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
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Accounts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="4%">photo</th>
                    <th>Username</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php

                    $query = "SELECT * FROM user";
                    $result = mysqli_query($connect,$query);
                    while($row=mysqli_fetch_assoc($result)) {
                      $username = $row['username'];
                      $phone = $row['phone'];
                      $email = $row['email'];
                      $image = $row['img'];



                    ?>

                  <tr>
                    <td width="4%"><img height="30px" src="uploads/<?php echo $image; ?>"></td>
                    <td><?php echo $username; ?></td>
                    <td> <?php echo $phone; ?></td>
                    <td><?php echo $email; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th width="4%">photo</th>
                    <th>Username</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           </div>
        </div>
      </div>
    </section>




</div>





<?php
 include 'footer.php' ;


?>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>