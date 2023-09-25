<?php

include "db.php";

$searched = "SELECT * FROM post WHERE title LIKE '%".$_POST['name']."%'";
$name = $_POST['name'];


$resulting = mysqli_query($connect,$searched);
if (mysqli_num_rows($resulting)>0) {
while($row=mysqli_fetch_assoc($resulting)) {
  $id = $row['id'];
  $title = $row['title'];
  $author = $row['author'];
  $summary = $row['summary'];
  $created = $row['created_on'];
  // $desc=  substr(html_entity_decode($description), 30, 400); 

 

?>


<tr>
                      <td class="mailbox-name"><a href="read-mail.html"><?php echo $author; ?></a></td>
                      <td class="mailbox-subject"><b><?php echo $title; ?></b> - <?php echo $summary ;?></td>
                      <!-- <td class="mailbox-attachment"></td> -->
                      <td class="mailbox-date"><?php echo $created; ?></td>
                      <td class="mailbox-date">
                        <a href="del_post.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete ?')" class="text-danger"><i class="fa fa-trash-alt"></i> 
                        </a>
                        <a href="edit_post.php?id=<?php echo $id ?>" class="text-primary ml-2"><i class="fa fa-edit"></i> 
                        </a>
                      </td>
                    </tr>
<?php } ?>

<?php }else{?>
  <div class="card_wrappernew" style="height: 150px; position: relative; top: -20px; display: flex; justify-content: center; align-items: center; margin-top: 50px; color: #ddd;">
    No Result Found For"<?php echo $name; ?>"
  </div>

<?php } ?>