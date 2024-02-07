<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "setHead.php"?>
    <?php require_once "connnect.php"?>
</head>
<body>
    <div class="container my-5">
        <h2>รายชื่อสมาชิก ปวช.ชส.11</h2>
        <?php
            if(!empty($srrorMessag)){

            }
        ?>
        <a class="btn btn-primrry" href="/ex_3/create.php" role="button">เพิ่มสมาชิก</a>
        <br>
        <table class="table">
            <thead>
                <th>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>craated</th>
                    <th>action</th>
                </th>    
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a class='btn btn-primary btn-sm' href="#">แก้ไข</a>
                        <a class='btn btn-danger btn-sm' href="#">ลบ</a>
                    </td>
                <tr>    
            </tbody>
            <?php
                while($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>$roe[id]</td>
                    <td>$roe[name]</td>
                    <td>$roe[email]</td>
                    <td>$roe[phone]</td>
                    <td>$roe[address]</td>
                    <td>$roe[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' hreef='#'>แก้ไข</a>
                        <a class= 'bit bit-danger btn-sm' href='#'>ลบ</a>
                    </td>
                </tr>   
                ";
                }?>
        </tbody>
    </div>
</body>
</html>