<?php
 include 'header.php' ;

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $deleteSlider = $connect->query("DELETE FROM slider WHERE id = $id");
    if($deleteSlider){
        echo "<script>alert('Slider Deleted');window.location='manage_slider.php';</script>";
    }else{
        echo "<script>alert('Error Deleting Slider');window.location='manage_slider.php'</script>";
    }
}
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
                        <th>title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php

                    $query = "SELECT * FROM slider";
                    $result = mysqli_query($connect,$query);
                    while($row=mysqli_fetch_assoc($result)) {
                      $title = $row['slider_title'];
                      $category = $row['category'];
                      $author = $row['author'];
                      $image = $row['image'];



                    ?>

                  <tr>
                    <td width="4%"><img height="30px" src="uploads/<?php echo $image; ?>"></td>
                    <td><?php echo $title; ?></td>
                    <td> <?php echo $category; ?></td>
                    <td><?php echo $author; ?></td>
                    <td>
                        <a href="add_slider.php?id=<?php echo $row['id']?>"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Are you sure?')" href="?delete=<?php echo $row['id']?>"><i class="fa fa-trash text-danger"></i></a>
                        
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <!-- <th width="4%">photo</th>
                    <th>Username</th>
                    <th>Phone Number</th>
                    <th>Email</th> -->
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