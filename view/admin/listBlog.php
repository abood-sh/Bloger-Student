<?php include_once('../partial/header.php') ?>
<?php
    if($_SESSION['IS_LOGIN'] = false){
        header('location: ../../index.php');
    }
?>
<div>
    <h1>مدونة طالب</h1>
    <h1>لوحة التحكم</h1>
    <a href="/bloger_student/view/admin/addblog.php">اضافة موضوع جديد</a>

    <table border="1">
        <thead>
            <tr>
                <th>العنوان</th>
                <th>تاريخ النشر</th>
                <th>الصورة</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sqlSelect = "SELECT * FROM `post`";
                $selectQuery = mysqli_query($conn, $sqlSelect);
                if(mysqli_num_rows($selectQuery)> 0){
                    while($row = mysqli_fetch_assoc($selectQuery)){
                        $id = $row['id'];
                        echo "
                            <tr>
                                <td><a href='/bloger_student/view/admin/singlePost.php?id=$id'>". $row['title'] ."</a></td>
                                <td>".$row['date_share']."</td>
                                <td> <img src='../../img/". $row['img'] ."' width='10%'></td>
                                

                            </tr>
                        ";
                    }
                }
            ?>
            <!-- <td></td> -->
        </tbody>
    </table>
</div>

<?php include_once('../partial/footer.php') ?>