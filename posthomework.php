<?php require("db.php"); ?>
<html>
    <head>

    </head>
    <body>
        <center>
            <h1>เพิ่มข้อมูลใหม่</h1>
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php 
                    $homework_date =  mysqli_real_escape_string($connection, $_POST["homework_date"]);
                    $homework_subject =  mysqli_real_escape_string($connection, $_POST["homework_subject"]);
                    $teacher_name =  mysqli_real_escape_string($connection, $_POST["teacher_name"]);
                    $homework =  mysqli_real_escape_string($connection, $_POST["homework"]);

                    $sql = "INSERT homework_data (homework_date, homework_subject, homework, teacher_name) VALUES ('$homework_date', '$homework_subject', '$homework', '$teacher_name');";
                    $result = mysqli_query($connection, $sql);


                ?>
                <?php if ($result): ?>
                    <h1>บันทึกแล้ว</h1>
                <?php else: ?>
                    <h1>บันทึกผิดพลาด</h1>
                <?php endif; ?>
            <?php else: ?>
            <form method="post">
                <input type="date" name="homework_date">
                <select name="homework_subject">
                    <option>คณิตศาสตร์(พื้นฐาน)</option>
                    <option>คณิตศาสตร์(เพิ่มเติม)</option>
                    <option>วิทยาศาสตร์(พื้นฐาน)</option>
                    <option>วิทยาศาสตร์(เพิ่มเติม)</option>
                    <option>ภาษาไทย</option>
                    <option>ภาษาอังกฤษ</option>
                    <option>ภาษาอังกฤษ เพื่อการสื่อสาร</option>
                    <option>คอมพิวเตอร์</option>
                    <option>วิทยาการคำนวน</option>
                    <option>สังคมศึกษา</option>
                    <option>ประวัติศาสตร์</option>
                    <option>ศิลปะ</option>
                    <option>การงานอาชีพ</option>
                    <option>สุขศึกษา</option>
                    <option>พละศึกษา</option>
                    <option>IS</option>
                    <option>หน้าที่พลเมือง</option>
                </select>
                <select name="teacher_name">
                    <option>นางระวีวรรณ ดอนท้วม</option>
                    <option>น.ส.มัลทินี บ่อเงิน</option>
                    <option>นายณัชพล ดีอุดม</option>
                    <option>นายนฤพนธ์ น่วมศิริ</option>
                    <option>นางอิ่มฤทัย สาหร่าย</option>
                    <option>นางรัชนี เตชา</option>
                    <option>ครูธมนวรรณ คําสุวรรณ</option>
                    <option>น.ส.นัทธ์ธนัน ธนันฐิติรัตน์</option>
                    <option>น.ส.จิตราพัชญ์ อมรนพรัตนกุล</option>
                    <option>ครูนครินทร์ แย้มอ้น</option>
                    <option>น.ส.ศิริพร อินทรา</option>
                    <option>นายชูชาติ โรจนอังกูร</option>
                    <option>นายวัชรพงษ์ ยงไสว</option>
                    <option>นางสาววาสนา จันทร์น้อย</option>
                    <option>นายมะเนศร์ อ่อนทอง</option>
                    <option>ครูกฤษฎิ์ปิญธา กาวิชัย</option>
                    <option>น.ส.นัทธ์ธนัน ธนันฐิติรัตน์</option>
                </select><br>

                <input type="text" name="homework"><br>

                <button type="submit">เพิ่มข้อมูลใหม่</button>
            </form>
            <?php endif; ?>
        </center>
    
    </body>
</html>
<?php mysqli_close($connection); ?>

