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
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
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
                    <th>Categories</th>
                    <th>Created By</th>
                    <th>Created On</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php

                    $query = "SELECT * FROM category";
                    $result = mysqli_query($connect,$query);
                    while($row=mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $catname = $row['cat_name'];
                      $creator = $row['creator'];
                      $created = $row['created'];




                    ?>

                  <tr>
                    <td><?php echo $catname; ?></td>
                    <td> <?php echo $creator; ?></td>
                    <td><?php echo $created; ?></td>
                    <td>
                    <a href="del_cat.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete ?')" class="text-danger"><i class="fa fa-trash-alt"></i> 
                    </a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Categories</th>
                    <th>Created By</th>
                    <th>Created On</th>
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