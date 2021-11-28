<?php include_once('../partial/header.php') ?>
<?php
    $id = $_GET['id'];
    $delete = "DELETE FROM `post` WHERE `id` = '$id'";
    $deleteQ = mysqli_query($conn, $delete);
    if($deleteQ){
        header('location: listBlog.php');
    }
?>

<?php include_once('../partial/footer.php') ?>