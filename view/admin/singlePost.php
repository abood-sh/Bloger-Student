<?php include_once('../partial/header.php') ?>
<?php
    if($_SESSION['IS_LOGIN'] = false){
        header('location: ../../index.php');
    }
?>
<?php 
    $id = $_GET['id'];
    $query = "SELECT * FROM `post` WHERE `id` = '$id'";
    $querySql = mysqli_query($conn, $query);
    if(mysqli_num_rows($querySql) == 1){
        $row = mysqli_fetch_assoc($querySql);
        echo "<h1>". $row['title'] ."</h1>";
        echo "<h4>". $row['date_share'] ."</h4>";
        echo "<img src = '../../img/" . $row['img'] . "'></img>";
        echo "<p>". $row['post'] ."</p>";

        
    
        
    }

?>
<a href="/bloger_student/view/admin/editSinglePost.php?id=<?php echo $id?>">تعديل</a>
<a href="/bloger_student/view/admin/delete.php?id=<?php echo $id?>">حذف</a>

<?php include_once('../partial/footer.php') ?>