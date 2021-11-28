<?php include_once('../partial/header.php') ?>
<?php
    if($_SESSION['IS_LOGIN'] = false){
        header('location: ../../index.php');
    }
?>
<?php
    $title = 0;
    $date = 0;
    $post = 0;
    $img = 0;
        $id = $_GET['id'];
        $query = "SELECT * FROM `post` WHERE `id` = '$id'";
        $querySql = mysqli_query($conn, $query);
        if(mysqli_num_rows($querySql) == 1){
            $row = mysqli_fetch_assoc($querySql);
            $title = $row['title'];
            $date = $row['date_share'];
            $post = $row['post'];
            $img = $row['img'];

    
            
        
            
        }
?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="title" value='<?php echo $title ?>' placeholder="العنوان">
        <br>
        <br>
        <textarea name="post" id="" cols="30" rows="10" placeholder=الموضوع>
        <?php echo $post ?>
        </textarea>
        <br>
        <br>
        <input type="date" name="date_share" id="" value="<?php echo $date ?>" placeholder="تاريخ النشر">
        <br>
        <br>
        <label for="">تحميل صورة</label>
        <input type="file" name="img" id="" value="<?php echo $img ?>">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php

        if(isset($_POST['submit'])){
            // $target_dir = "../../img/";
            // $target_file = $target_dir . basename($_FILES["img"]["name"]);
            // $uploadOk = 1;
            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // $check = getimagesize($_FILES["img"]["tmp_name"]);
            // if($check !== false) {
            //     echo "File is an image - " . $check["mime"] . ".";
            //     $uploadOk = 1;
            //   } else {
            //     echo "File is not an image.";
            //     $uploadOk = 0;
            //   }
            // $filename = $_FILES["img"]["name"];
            // $tempname = $_FILES["img"]["tmp_name"];  
            // $folder = "../../img/".$filename;   

            $title = $_POST['title']; 
            $post = $_POST['post'];
            $date = $_POST['date_share'];
            // $img = $_POST['img'];
            $update = "UPDATE `post` SET `title`='$title',`post`='$post',`date_share`='$date' WHERE `id` = '$id'";
            $addQuery = mysqli_query($conn, $update);
            if($addQuery){
            //     if (move_uploaded_file($tempname, $folder)) {

            //         $msg = "Image uploaded successfully";
        
            //     }else{
        
            //         $msg = "Failed to upload image";
        
            // }
                header('location: listBlog.php');
                echo "success";
            }

        
        }
    ?>



<?php include_once('../partial/footer.php') ?>