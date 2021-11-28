<?php include_once('../partial/header.php') ?>

<form action="" method="POST">
    <input type="text" name="name" placeholder="user name">
    <br>
    <br>
    <input type="password" name="password" placeholder="password">
    <br>
    <br>
    <button type="submit" name="submit">Login</button>
</form>

<?php
    if(isset($_POST['submit'])){
        $userName = $_POST['name'];
        $pass = $_POST['password'];
        echo $userName . " ". $pass;
        $sele = "SELECT * FROM `user` WHERE `name` = '$userName' AND `password` = '$pass'";
        $seleQ = mysqli_query($conn, $sele);
        if(mysqli_num_rows($seleQ) > 0){
            echo "success";
            $row = mysqli_fetch_assoc($seleQ);
            $_SESSION['USER_NAME'] = $row['name'];
            $_SESSION['IS_LOGIN'] = true;
            header('location: listBlog.php');
        }
    }
?>





<?php include_once('../partial/footer.php') ?>
