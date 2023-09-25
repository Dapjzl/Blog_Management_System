<?php include 'lead360_Admin/connect/db.php' ?>
<?php
    $email = check_input($_POST['subEmail']);
    $created = date('Y-m-d');

    $success = false;

    $check = dbConnect()->prepare("SELECT * FROM subscribers WHERE email=?");
    $check->execute([$email]);
    if (empty($email)) {
        echo "<script>alert('You have not entered your E-mail into the input field')</script>";
    }elseif ($check->rowCount()>0) {
        echo "<script>alert('This E-mail already subscribed to lead360 newsletter.')</script>";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid E-mail address. please check it and try again!!')</script>";
    }
    else {
        $sql = dbConnect()->prepare("INSERT INTO subscribers SET email=?, created=?");
        $sql->execute([$email,$created]);
        echo "<script>alert('Success, whenever we have updates, you will recieve them.')</script>";
        $success = true;




        
    }


?>


<script>
    let success = <?php echo $success; ?>;
    if (success == true) {
        $("#form-wizard3")[0].reset();
        $("#emInput").load(location.href + " #emInput");
        $('.closeBtnX').trigger('click');

    }
</script>