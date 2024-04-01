<html>
    
    <?php 
    require("db.php"); ?>


<head>
        <link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />
    </head>

    <body>

    <?php
        $sql = "SELECT * FROM homework_data ORDER BY homework_id DESC";
        $result = mysqli_query($connection, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>



        <font face="TH SarabunPSK">
    <!-- nav bar -->

        <div class="nav">
            <center>
                <div class="nav_content">
                    <div class="nav_title_homework">
                        <img src="img/icon_homework.png" height="60px">
                        <p id="text_nav_title_homework"><b>จดการบ้าน</b></p>
                    </div>

                
                </div>
            </center>
        </div>

        <!-- content -->

        <?php foreach ($rows as $row): ?>
        <center>
            <div class="content">
            <div class="content_homework_box">
                    <p id="subject_teacher" align="left"><?php echo $row["homework_subject"]; ?> | <?php echo $row["teacher_name"]; ?> | <?php echo $row["homework_date"];?></p><hr>
                    <p id="homework" align="left"><?php echo $row["homework"]; ?></p>
                </div>
            </div>
        </center>
        
        

    </font>
    <script src="server.js"></script>

    <?php endforeach; ?>
    </body>
        <?php mysqli_close($connection); ?>
</html>


