<?php
$name ="";
$email ="";
$phone ="";
$address="";

$errorMesag ='';

if ($_SERVER['REQUEST_METHOD']  ==  'POST'){
    $name = $_POST["name"];
    $email = $_POSR["email"];
    $phone = $_POSR["phone"];
    $address = $_POSR["address"];

    do {
        if (empty($name) || empty($email)  || empty($phone) || empty($address)){
            $errorMessag ="Ali the fields are required";
            break;
        }

    //add new cliet to datadase
    $name ="";
    $email ="";
    $phone ="";
    $address="";  

    $errorMesag ="client added correctly";
    

    } while (false);
      
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "setHead.php"?>
    <?php require_once "connnect.php"?>
</head>
<body>
    <div class="container my-5">
        <h2>เพิ่มสมาชิก</h2>
        <form method="post">
        <div class="col-md-3">
            <label classs="col-sm-3 col-foem-ladel"> Name</label>
            <div class="col-sm-6">
                <inpu type="text" class="form-control"name="name" value="<?php echo $Name ;?>">
            </div>
        </div>
        <div class="col-md-3">
            <label classs="col-sm-3 col-foem-ladel">Email</label>
            <div class="col-sm-6">
                <inpu type="text" class="form-control"name="email" value="<?php echo $email;?>">
            </div>
        </div>
        <div class="col-md-3">
            <label classs="col-sm-3 col-foem-ladel">phone</label>
            <div class="col-sm-6">
                <inpu type="text" class="form-control"name="phome" value="<?php echo $phone;?>">
            </div>
        </div>
        <div class="col-md-3">
            <label classs="col-sm-3 col-foem-ladel">address</label>
            <div class="col-sm-6">
                <inpu type="text" class="form-control"name="address" value="<?php echo $address;?>">
            </div>
        </div>
        <?php
        if (!empty($successMessag)) {
            echo "
            <div class='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessag</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lable></button>
                    </div>
                </div>
            </div>
            ";
        }
        ?>

        <!--Buttom-->
        <div class="row md-3">
            <div class="offser-sm-3 col-3 d-grid">
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
            <div class="offser-sm-3 col-3 d-grid">
                <a class="btn btn-outline-primary" href="/ex_3/index.php" role="button">ยกเลิก</button>
            </div>
            
        </div>
        </form>

</body>
</html>