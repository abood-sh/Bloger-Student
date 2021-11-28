<?php include_once('mysql/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul li{
            list-style: none;
            float: left;
            margin-right: 10px;
            
        }
    </style>
</head>
<body>
    <div>
        <ul>
            <li><a href="/bloger_student/"> الرئيسية</a></li>
           
            <li><a href="/bloger_student/view/admin/login.php">تسجيل الدخول</a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>

    <?php
                $sqlSelect = "SELECT * FROM `post`";
                $selectQuery = mysqli_query($conn, $sqlSelect);
                if(mysqli_num_rows($selectQuery)> 0){
                    while($row = mysqli_fetch_assoc($selectQuery)){
                        $id = $row['id'];
                        echo "<h1>". $row['title'] ."</h1>";
                        echo "<h4>". $row['date_share'] ."</h4>";
                        echo "<img src = 'img/" . $row['img'] . "'></img>";
                        echo "<p>". $row['post'] ."</p>";
                    }
                }
            ?>
</body>
</html>