<?php include 'header.php';

		$id = $_GET['id']; 



    if (isset($_POST['submit'])) {
        $title = check_input($_POST['title']);
        $author = check_input($_POST['author']);
        $cat = check_input($_POST['category']);
        $description = check_input($_POST['description']);
        $created = date("Y-m-d");
        $summary = check_input($_POST['summary']);


        if (empty($title) || empty($cat) || empty($author) || empty($description) || empty($summary) ) {
            echo "<script>alert('You have not completed all required fields!!!')</script>";
        }else{

        	$reg = dbconnect()->prepare("UPDATE post SET title=?,author=?,cat_id=?,summary=?,description=?,created_on=? WHERE id='$id'");
            $reg->execute([$title,$author,$cat,$summary,$description,$created,]);
            if($reg){
                    echo "<script> alert('Operation Successful!!!'); window.location='view_posts.php';</script>";
            }else{
            echo "<script> alert ('Oops, Operation Failed TRY AGAIN LATER!!!');</script>";
            }





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
            <h1>Edit News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit News</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
             <form method="post"> 
              <!-- /.card-header -->
              <div class="card-body">
                <div class="card-body">

                	<?php
					// include'connect/db.php';


					$query = dbconnect()->prepare("SELECT * FROM post WHERE id=?");
					$done = $query->execute([$id]);
					if ($row=$query->fetch()) {
						$id = $row['id'];
	                    $title = $row['title'];
	                    $author = $row['author'];
	                    $description = $row['description'];
	                    $created = $row['created_on'];
	                    $summary = $row['summary'];
	                    $catId = $row['cat_id'];
	                    
	                    
										
					}
					?>

                    <div class="row">
                    
                        <div class="form-group col-md-7">
	                        <label for="exampleInputEmail1">Post Title</label>
	                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $title; ?>" placeholder="">
                      	</div>
                      	<div class="form-group col-md-5">
                        <label for="exampleInputPassword1">Category</label>
                        <select type="text" class="form-control" id="exampleInputPassword1" name="category">
                            <option value="">...</option>
                            <?php

                            $query = "SELECT * FROM category";
                            $result = mysqli_query($connect,$query);
                            while($row=mysqli_fetch_assoc($result)) {
                              $cid = $row['id'];
                              $catname = $row['cat_name'];


                            ?>
                            <option value="<?php echo $cid; ?>"><?php echo $catname; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
	                    <label for="exampleInputEmail1">Author</label>
	                    <input type="text"  value="<?php echo $author; ?>" class="form-control" id="exampleInputEmail1" name="author" placeholder="">
                  	</div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Image Copyright</label>
                    <input type="text" value="<?php echo $summary ?>" class="form-control" maxlength="75" id="exampleInputEmail1" name="summary" placeholder="Image copyright here.. ">
                  </div>
                
                <div class="form-group">
                    <textarea id="compose-textarea" name="description" class="form-control" style="height: 300px">
                     <?php echo $description; ?>
                    </textarea>
                </div>
                
              </div>
              <!-- /.card-body -->
            <!--   <div class="card-footer" >
                  <button type="submit" name="submit" class="btn btn-primary">Post</button>
               </div> -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
                <a type="reset" href="view_posts.php" class="btn btn-default text-danger"><i class="fas fa-times "></i> Cancel</a>
              </div>
              <!-- /.card-footer -->
            </div>
        </form>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'; ?>
<!-- Page specific script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>